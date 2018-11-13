<?php namespace Worcbox\Features;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Worcbox\Features\Components\Items' => "items"
        ];
    }

    public function registerSettings()
    {
    }
}
