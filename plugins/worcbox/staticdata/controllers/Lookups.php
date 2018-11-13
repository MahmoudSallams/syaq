<?php namespace Worcbox\StaticData\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Lookups extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $requiredPermissions = [
        'worcbox.staticData.*'
    ];

    public function __construct()
    {
        parent::__construct();
//        BackendMenu::setContext('Worcbox.Lookups', 'static-data');
        BackendMenu::setContext('Worcbox.StaticData', 'static-data');
    }
}
