<?php

namespace Worcbox\Syaq\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Worcbox\Syaq\Models\Order;
use Worcbox\Syaq\Models\OrderAttachment;
use Worcbox\Syaq\Models\OrderHistory;
use DB;
use Mail;
use BackendAuth;

class OrderAssigning extends Controller {

    public $implement = ['Backend\Behaviors\FormController'];
    public $formConfig = 'config_form.yaml';

    public function __construct() {
        parent::__construct();
        BackendMenu::setContext('Worcbox.Syaq', 'main-menu-orders', 'running');
    }

    public function formBeforeSave($model) {
//        echo json_encode($model);
//        exit();
        return $model;
    }

    public function formFindModelObject($recordId) {
        $model = parent::formFindModelObject($recordId);
//        
//        $users = \Backend\Models\User::select(Db::raw("id, CONCAT(first_name, ' ',last_name) AS name"))
//                ->lists('name', 'id');
//        foreach ($model->OrderAttachments as $oa) {
//            echo json_encode($oa->Implementer);
//            exit();
//            if ($oa->implementer_user_id) {
//                $oa->implementer_name = $users[$oa->implementer_user_id];
//            }
//            if ($oa->reviewer_user_id) {
//                $oa->reviewer_name = $users[$oa->reviewer_user_id];
//            }
//        }
        return $model;
    }

    private $oldStatus;
    private $historyNote;

    public function formBeforeUpdate($model) {
        $this->oldStatus = $model->status;
        $this->historyNote = $this->formGetWidget()->getSaveData()['history_note'];
        return $model;
    }

    public function formAfterUpdate($model) {
        if ($model->status == Order::STATUS_FINISHED && $this->oldStatus != Order::STATUS_FINISHED) {
            $attachment = OrderAttachment::where('order_id', $model->id)->orderBy('id', 'desc')->first();
            Mail::send('worcbox.orders.finished::mail.message', [], function ($message) use ($attachment, $model) {
                $message->to($model->User->email, null);
                $message->attach($attachment->content->getPath());
            });
        }
        $this->createHistory($model);
        return $model;
    }

    private function createHistory($model) {
        $history = new OrderHistory();
        $history->order_id = $model->id;
        if (count($model->OrderAttachments) > 0) {
            $history->order_attachment_id = $model->OrderAttachments[count($model->OrderAttachments) - 1]->id;
        }
        $history->status = $model->status;
        if (BackendAuth::getUser()->role->code == "content-manager") {
            $history->manager_user_id = BackendAuth::getUser()->id;
            if ("implementation" == $history->status) {
                $history->implementer_user_id = $model->Implementer->id;
            } else if ("reviewing" == $history->status) {
                $history->reviewer_user_id = $model->Reviewer->id;
            }
        } else if (BackendAuth::getUser()->role->code == "reviewer") {
            $history->reviewer_user_id = BackendAuth::getUser()->id;
        } else if (BackendAuth::getUser()->role->code == "orders-implementer") {
            $history->implementer_user_id = BackendAuth::getUser()->id;
        }
        $history->note = $this->historyNote;
        $history->save();
    }

}
