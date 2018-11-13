<?php

namespace Worcbox\Syaq\Widgets;

use Backend\Classes\ReportWidgetBase;
use Worcbox\Syaq\Models\Order;

class RunningOrders extends ReportWidgetBase {

    public function render() {
        $type = $this->property('type');
        switch ($type) {
            case 'new':
                $ordersCount = Order::where('status', Order::STATUS_NEW)->count();
                
                break;
            case 'finished':
                $ordersCount = Order::where('status', Order::STATUS_FINISHED)->count();
                break;
            case 'archived':
                $ordersCount = Order::where('status', Order::STATUS_ARCHIVED)->count();
                break;
            case 'running':
                $ordersCount = Order::where('status', '<>', Order::STATUS_NEW)->
                        where('status', '<>', Order::STATUS_FINISHED)->
                        where('status', '<>', Order::STATUS_ARCHIVED)->count();
                break;
            default :
                $ordersCount = Order::count();
        }
        return $this->makePartial('orders', ['count' => $ordersCount, 'type'=> strtoupper($type)]);
    }

    public function defineProperties() {
        return [
            'type' => [
                'title' => 'Type',
                'default' => 'new'
            ]
        ];
    }

}
