<?php

namespace Worcbox\Features\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Lang;
use Flash;

class Items extends Controller {

    public $implement = ['Backend\Behaviors\ListController', 'Backend\Behaviors\FormController', 'Backend\Behaviors\ReorderController'];
//    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $listConfig = [
        'all' => 'config_list.yaml',
        'bytype' => 'config_bytype_list.yaml',
    ];
    public $requiredPermissions = [
        'worcbox.feature.*'
    ];

    public function __construct() {
        parent::__construct();
        BackendMenu::setContext('Worcbox.Features', 'main-menu-features');
    }

    public $featureType;

    public function bytype($type) {
        $this->featureType = $type;
        parent::index();
    }

    public function bytype_onDelete($type) {
        $this->featureType = $type;

        if (method_exists($this, 'onDelete')) {
            return call_user_func_array([$this, 'onDelete'], func_get_args());
        }

        /*
         * Validate checked identifiers
         */
        $checkedIds = post('checked');
        if (!$checkedIds || !is_array($checkedIds) || !count($checkedIds)) {
            Flash::error(Lang::get('backend::lang.list.delete_selected_empty'));
            return $this->listRefresh();
        }

        /*
         * Establish the list definition
         */
        $definition = 'bytype';

//        if (!isset($this->listDefinitions[$definition])) {
//            throw new \October\Rain\Exception\ApplicationException(Lang::get('backend::lang.list.missing_parent_definition', compact('definition')));
//        }

        $listConfig = $this->listGetConfig($definition);

        /*
         * Create the model
         */
        $class = $listConfig->modelClass;
        $model = new $class;
        $model = $this->listExtendModel($model, $definition);

        /*
         * Create the query
         */
        $query = $model->newQuery();
        $this->listExtendQueryBefore($query, $definition);

        $query->whereIn($model->getKeyName(), $checkedIds);
        $this->listExtendQuery($query, $definition);


        /*
         * Delete records
         */
        $records = $query->get();

        if ($records->count()) {
            foreach ($records as $record) {
                $record->delete();
            }

            Flash::success(Lang::get('backend::lang.list.delete_selected_success'));
        } else {
            Flash::error(Lang::get('backend::lang.list.delete_selected_empty'));
        }

        return $this->listRefresh($definition);
    }

    public function listExtendQuery($query, $d) {
        if ($d == "bytype") {
            return $query->where("type", $this->featureType);
        } else {
            return $query;
        }
    }

}
