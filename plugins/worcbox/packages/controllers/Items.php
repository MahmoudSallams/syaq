<?php

namespace Worcbox\Packages\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Items extends Controller {

    public $implement = ['Backend\Behaviors\ListController', 'Backend\Behaviors\FormController', 'Backend\Behaviors\ReorderController'];
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $requiredPermissions = [
        'worcbox.packages.*'
    ];

    public function __construct() {
        parent::__construct();
        BackendMenu::setContext('Worcbox.Packages', 'main-menu-packages');
    }

}
