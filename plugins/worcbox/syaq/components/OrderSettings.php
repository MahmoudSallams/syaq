<?php

namespace Worcbox\Syaq\Components;

use Cms\Classes\ComponentBase;
use Worcbox\Syaq\Models\Field;
use Worcbox\Syaq\Models\AudienceGender;
use Worcbox\Syaq\Models\SpeechFormat;
use Worcbox\Syaq\Models\TitleField;
use Worcbox\Syaq\Models\TypingMode;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of OrderSettings
 *
 * @author mostafa
 */
class OrderSettings extends ComponentBase {

    public function componentDetails() {
        return [
            'name' => 'Order Settings',
            'description' => 'all lists needed in order settings',
        ];
    }

    public $activeFields;
    public $activeAudienceGenders;
    public $activeSpeechFormats;
    public $activeTitleFields;
    public $activeTypingModes;

    public function onRun() {
        $this->activeFields = Field::where('active', 1)->orderBy('name', 'asc')->get();
        $this->activeAudienceGenders = AudienceGender::where('active', 1)->orderBy('name', 'asc')->get();
        $this->activeSpeechFormats = SpeechFormat::where('active', 1)->orderBy('name', 'asc')->get();
        $this->activeTitleFields = TitleField::where('active', 1)->orderBy('name', 'asc')->get();
        $this->activeTypingModes = TypingMode::where('active', 1)->orderBy('name', 'asc')->get();
    }

}
