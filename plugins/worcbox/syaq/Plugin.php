<?php

namespace Worcbox\Syaq;

use System\Classes\PluginBase;

class Plugin extends PluginBase {

    public function registerComponents() {
        return [
            'Worcbox\Syaq\Components\ServicesList' => 'servicesList',
            'Worcbox\Syaq\Components\OrderSettings' => 'orderSettings',
            'Worcbox\Syaq\Components\OrderForm' => 'orderForm',
            'Worcbox\Syaq\Components\OrderConfirm' => 'orderConfirm',
        ];
    }

    public function registerSettings() {
        
    }
    
    public function registerReportWidgets() {
        return [
            'Worcbox\Syaq\Widgets\RunningOrders' => [
                'label' => 'Orders Count',
                'context' => 'dashboard'
            ]
        ];
    }

}
