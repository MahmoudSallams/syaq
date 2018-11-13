<?php

namespace Worcbox\Packages\Components;

use Cms\Classes\ComponentBase;
use Worcbox\Packages\Models\Item;

class Package extends ComponentBase {

    public $item;
    private $itemId;

    public function componentDetails() {
        return [
            'name' => "Package",
            'description' => "show all items"
        ];
    }

    public function defineProperties() {
        return [
            'param' => [
                'title' => "Page Param",
                'description' => 'Page Param name to get the packageId',
                'default' => "0"
            ]
        ];
    }

    public function onRun() {
        $this->itemId = $this->param($this->property('param'));
        $this->item = $this->loadItems($this->itemId);
    }

    protected function loadItems($param = 0) {
        $item = Item::find($param);
        return $item;
    }

}
