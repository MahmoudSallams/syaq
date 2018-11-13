<?php

namespace Worcbox\Packages\Components;

use Cms\Classes\ComponentBase;
use Worcbox\Packages\Models\Item;

class Items extends ComponentBase {

    public $items;
    private $count;

    public function componentDetails() {
        return [
            'name' => "Items List",
            'description' => "show all items"
        ];
    }

    public function defineProperties() {
        return [
            'count' => [
                'title' => "Items Count",
                'description' => 'Number Of items to show, Enter 0 for all',
                'default' => "0"
            ]
        ];
    }

    public function onRun() {
        $this->count = $this->property('count');
        $this->items = $this->loadItems($this->count);
    }

    protected function loadItems($count = 0) {
        if ($count > 0) {
            $items = Item::take($count)->get();
//            echo "-------" . json_encode($items);
//            exit();
            return $items;
        } else {
//            echo "aaaa-------";
            return Item::all();
        }
    }

}
