<?php

namespace Worcbox\Syaq\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Redirect;
use Worcbox\Syaq\Models\Order;
use Worcbox\Syaq\Models\OrderHistory;
use BackendAuth;

class OrderAttach extends Controller {

    public $implement = ['Backend\Behaviors\FormController'];
    public $formConfig = 'config_form.yaml';

    public function __construct() {
        parent::__construct();
        BackendMenu::setContext('Worcbox.Syaq', 'main-menu-orders', 'running');
    }

    public function create($orderId = null, $context = null) {
        if (!$orderId) {
            throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException("Missing Order Id");
        }
        parent::create($context);
    }

    public function create_onSave($orderId = null, $context = null) {
        $this->orderId = $orderId;
        return parent::create_onSave($context);
    }

    private $orderId;

    public function formExtendModel($model) {
        if (!$model->order_id) {
            $model->order_id = $this->orderId;
        }
        return $model;
    }

    public function formBeforeCreate($model) {
        $model->order_id = $this->orderId;
        $model->implementer_user_id = $this->user->id;
        return $model;
    }

    public function formAfterCreate($model) {
        $foundOrder = Order::find($model->order_id);
        $foundOrder->status = Order::STATUS_IMPLEMENTATION_DONE;
        $foundOrder->implementer_user_id = null;
        $savedOrder = $foundOrder->save();
        $this->createHistory($foundOrder);
    }

    public function formBeforeUpdate($model) {
        $model->reviewer_user_id = $this->user->id;
        return $model;
    }

    private $historyNote;

    public function formAfterUpdate($model) {
        $this->historyNote = $model->note;
        $foundOrder = Order::find($model->order_id);
        $foundOrder->status = Order::STATUS_REVIEWEING_DONE;
        $foundOrder->reviewer_user_id = null;
        $savedOrder = $foundOrder->save();
        $this->createHistory($foundOrder);
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
