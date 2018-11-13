<?php

namespace Worcbox\Syaq\Components;

use Cms\Classes\ComponentBase;
use Worcbox\Syaq\Models\Service;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of ServicesList
 *
 * @author mostafa
 */
class ServicesList extends ComponentBase {

    public function componentDetails() {
        return [
            'name' => 'Services List',
            'description' => 'list all active services',
        ];
    }

    public $activeServices;

    public function onRun() {
        $this->activeServices = Service::where('active', 1)->orderBy('name', 'asc')->get();
    }

}
