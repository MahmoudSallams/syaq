<?php

namespace Worcbox\Syaq\Components;

use Redirect;
use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Session;
use Worcbox\Syaq\Models\Service;
use Worcbox\Syaq\Models\Field;
use Worcbox\Syaq\Models\AudienceGender;
use Worcbox\Syaq\Models\SpeechFormat;
use Worcbox\Syaq\Models\TitleField;
use Worcbox\Syaq\Models\TypingMode;
use Worcbox\Syaq\Models\Order;
use Auth;
use Mail;

class OrderConfirm extends ComponentBase {

    public function componentDetails() {
        return [
            'name' => 'Order Confirm',
            'description' => 'front end form to confirm an order',
        ];
    }

    public $order;

    public function onRun() {
        if (Session::has('order')) {

            $order = Session::get('order');
            $order['user_id'] = Auth::getUser()->id;

            $service = Service::find($order['service_id']);
            $order['service'] = $service->name;
            $order['field'] = Field::find($order['field_id'])->name;
            $order['typing_mode'] = TypingMode::find($order['typing_mode_id'])->name;
            $order['audience_gender'] = AudienceGender::find($order['audience_gender_id'])->name;
            $order['speech_format'] = SpeechFormat::find($order['speech_format_id'])->name;
            $order['title_field'] = TitleField::find($order['title_field_id'])->name;

            $itemPrice = $service->basic_cost;
            $itemPrice += ($order['words_count'] - $service->minimum_words_count) / $service->extra_block_words_count * $service->extra_block_cost;
            $itemPrice += $order['express'] ? $service->express_cost : 0;
            $itemPrice += $order['high_quality'] ? $service->high_quality_cost : 0;
            $total = $itemPrice * $order['quantity'];
            $order['total'] = $total;
            $order['requested'] = date('d/m/Y');
            $order['days_count'] = $order['express'] ? $service->express_duration_in_days : $service->basic_duration_in_days;

            Session::put('order', $order);
            $this->order = $order;
        } else {
            return Redirect::to('request');
        }
    }

    public function onConfirm() {
        $order = Session::get('order');
        if(!$order){
            return Redirect::to('request');
        }
        $orderObject = Order::make($order);
        $orderObject->status = Order::STATUS_NEW;
        if ($orderObject->save()) {
            Session::forget('order');
            /* Sending Mail | START */
            $params = ['name' => Auth::getUser()->name];
            
            Mail::sendTo(Auth::getUser()->email, 'worcbox.orders.confirm::mail.message', $params);


            /* Sending Mail | END */
            return Redirect::to('thanks');
        } else {
//            throw new Datab
        }
    }

}
