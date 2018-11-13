<?php

namespace Worcbox\Packages;

use System\Classes\PluginBase;

class Plugin extends PluginBase {

    public function registerComponents() {
        return [
            'Worcbox\Packages\Components\Items' => "items",
            'Worcbox\Packages\Components\package' => "package"
        ];
    }

    public function registerSettings() {
        
    }

}
