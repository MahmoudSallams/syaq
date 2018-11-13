<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Worcbox\Syaq\Components;

use Auth;
use Input;
use Illuminate\Support\Facades\Session;
use Cms\Classes\ComponentBase;
use Validator;
use Worcbox\Syaq\Models\AudienceGender;
use Worcbox\Syaq\Models\Field;
use Worcbox\Syaq\Models\Service;
use Worcbox\Syaq\Models\SpeechFormat;
use Worcbox\Syaq\Models\TitleField;
use Worcbox\Syaq\Models\TypingMode;
use Illuminate\Support\Facades\Redirect;
use October\Rain\Exception\ValidationException;
/**
 * Description of OrderForm
 *
 * @author mostafa
 */
class OrderForm extends ComponentBase {

    public function componentDetails() {
        return [
            'name' => 'Order Form',
            'description' => 'front end form to make an order',
        ];
    }

    public function onSubmit() {
        
        $data = Input::all();
        $rules = [
            'topic' => 'string|required',
            'service_id' => 'required',
            'field_id' => 'required',
            'speech_format_id' => 'required',
            'audience_gender_id' => 'required',
            'title_field_id' => 'required',
            'typing_mode_id' => 'required',
            'audience_identification' => 'string|required',
            'notes' => 'string',
            'words_count' => 'required',
            'quantity' => 'required',
            'express' => 'boolean|required',
            'high_quality' => 'boolean|required',
        ];
        $messages = [
            'required' => 'حقل إلزامى', 
       ];

        $validator = Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        
        // store data to Session
        Session::put('order', $data);
        
        if (!Auth::check()){
            return Redirect::to('login');
        } else {
            return Redirect::to('confirm');
        }
    }

    public $activeFields;
    public $activeAudienceGenders;
    public $activeSpeechFormats;
    public $activeTitleFields;
    public $activeTypingModes;
    public $activeServices;

    public function onRun() {
        $this->activeFields = Field::where('active', 1)->orderBy('name', 'asc')->get();
        $this->activeAudienceGenders = AudienceGender::where('active', 1)->orderBy('name', 'asc')->get();
        $this->activeSpeechFormats = SpeechFormat::where('active', 1)->orderBy('name', 'asc')->get();
        $this->activeTitleFields = TitleField::where('active', 1)->orderBy('name', 'asc')->get();
        $this->activeTypingModes = TypingMode::where('active', 1)->orderBy('name', 'asc')->get();
        $this->activeServices = Service::where('active', 1)->orderBy('name', 'asc')->get();
    }

}
