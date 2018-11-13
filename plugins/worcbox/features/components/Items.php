<?php

namespace Worcbox\Features\Components;

use Cms\Classes\ComponentBase;
use Worcbox\Features\Models\Item;

class Items extends ComponentBase {

    public $items;
    private $type;
    private $count;

    public function componentDetails() {
        return [
            'name' => "Items List",
            'description' => "show all items"
        ];
    }

    public function defineProperties() {
        return [
            'type' => [
                'title' => "Type",
                'description' => 'Enter features types to be loaded',
                'default' => ""
            ],
            'count' => [
                'title' => "Count",
                'description' => 'Number of items to show 0 for All',
                'default' => "0"
            ],
        ];
    }

    public function onRun() {
        $this->type = $this->property('type');
        $this->count = $this->property('count');
        $this->items = $this->loadItems($this->type, $this->count);
    }

    protected function loadItems($type = "",$count = 0) {
        if (!empty($type) && !empty($count)) {
            return Item::where("type", $type)->take($count)->get();
        } else if (!empty($type)) {
            return Item::where("type", $type)->get();
        } else if (!empty($count)) {
            return Item::take($count)->get();
        } else {
            return Item::all();
        }
    }

}
