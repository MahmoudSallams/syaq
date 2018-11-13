<?php

namespace Worcbox\Syaq\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Lang;
use Flash;
use Worcbox\Syaq\Models\Order;

class Orders extends Controller {

    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ReorderController',
    ];
    public $listConfig = [
        'all' => 'config_list.yaml',
        'running' => 'config_running_list.yaml',
        'unassigned' => 'config_unassigned_list.yaml',
        'finished' => 'config_finished_list.yaml',
        'archived' => 'config_archived_list.yaml',
    ];
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $requiredPermissions = [
        'worcbox.syaq.orders.*'
    ];

    public function __construct() {
        if ($this->action == 'assigning') {
            $this->formConfig = 'config_assigning_form.yaml';
        }

        parent::__construct();

        BackendMenu::setContext('Worcbox.Syaq', 'main-menu-orders');
    }

    public function running() {
        $this->setConfig('config_running_list.yaml');
        $this->makeLists();
        $this->pageTitle = $this->pageTitle ?: Lang::get($this->getConfig(
                                'title', 'backend::lang.list.default_title'
        ));
        BackendMenu::setContext('Worcbox.Syaq', 'main-menu-orders', 'running');
    }
    
    public function running_onDelete() {

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
        $definition = 'running';

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

    public function unassigned() {
        $this->setConfig('config_unassigned_list.yaml');
        $this->makeLists();
        $this->pageTitle = $this->pageTitle ?: Lang::get($this->getConfig(
                                'title', 'backend::lang.list.default_title'
        ));
        BackendMenu::setContext('Worcbox.Syaq', 'main-menu-orders', 'unassigned');
    }
    public function unassigned_onDelete() {

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
        $definition = 'unassigned';

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

    public function finished() {
        $this->setConfig('config_finished_list.yaml');
        $this->makeLists();
        $this->pageTitle = $this->pageTitle ?: Lang::get($this->getConfig(
                                'title', 'backend::lang.list.default_title'
        ));
        BackendMenu::setContext('Worcbox.Syaq', 'main-menu-orders', 'finished');
    }
    public function finished_onDelete() {

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
        $definition = 'finished';

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
    
    public function archived() {
        $this->setConfig('config_archived_list.yaml');
        $this->makeLists();
        $this->pageTitle = $this->pageTitle ?: Lang::get($this->getConfig(
                                'title', 'backend::lang.list.default_title'
        ));
        BackendMenu::setContext('Worcbox.Syaq', 'main-menu-orders', 'archived');
    }
    
     public function archived_onDelete() {

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
        $definition = 'archived';

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

    public function listExtendQuery($query, $definition) {
        switch ($definition) {
            case 'unassigned':
                $query->where('status', Order::STATUS_NEW);
                break;
            case 'finished':
                $query->where('status', Order::STATUS_FINISHED);
                break;
            case 'archived':
                $query->where('status', Order::STATUS_ARCHIVED);
                break;
            case 'running':
                $query->where('status', '<>', Order::STATUS_NEW)->
                        where('status', '<>', Order::STATUS_FINISHED)->
                        where('status', '<>', Order::STATUS_ARCHIVED);
                break;
        }
        switch ($this->user->role_id) {
            case 4: // implementer
                $query->where('implementer_user_id', $this->user->id);
                break;
            case 5: // reviewer
                $query->where('reviewer_user_id', $this->user->id);
                break;
        }

//        exit();
//        if ($this->user->role_id)
    }

    public function assigning($recordId = null, $context = null) {
        try {
            print_r($this->action);
            exit();
//            print_r($context);
//            exit();
//            $this->context = strlen($context) ? $context : $this->getConfig('update[context]', 'update');
//            $this->controller->pageTitle = $this->controller->pageTitle ?: $this->getLang(
//                "{$this->context}[title]",
//                'backend::lang.form.update_title'
//            );
//            $this->
//            $this->config = $this->makeConfig('config_assigning_form.yaml');
            $this->formConfig = 'config_assigning_form.yaml';
            $model = $this->formFindModelObject($recordId);
            $this->initForm($model, $context);
//            print_r($this->formGetModel());
//            exit();
        } catch (Exception $ex) {
            $this->handleError($ex);
        }
    }
 

}
