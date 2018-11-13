<?php

namespace Worcbox\Syaq\Models;

use Model;
use BackendAuth;

/**
 * Model
 */
class Order extends Model {
    use \October\Rain\Database\Traits\Validation;

    const STATUS_NEW = 'new';
    const STATUS_IMPLEMENTATION = 'implementation';
    const STATUS_IMPLEMENTATION_DONE = 'implementation_done';
    const STATUS_REVIEWEING = 'reviewing';
    const STATUS_REVIEWEING_DONE = 'reviewing_done';
    const STATUS_FINISHED = 'finished';
    const STATUS_ARCHIVED = 'archived';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'worcbox_syaq_orders';
    protected $fillable = [
        'service_id',
        'quantity',
        'words_count',
        'days_count',
        'high_quality',
        'topic',
        'field_id',
        'audience_gender_id',
        'speech_format_id',
        'title_field_id',
        'typing_mode_id',
        'audience_identification',
        'notes',
        'user_id',
//        'created_at',
//        'updated_at',
        'status',
//        'reviewer_user_id',
//        'implementer_user_id',
        'express',
        'total',
    ];
    public $belongsTo = [
        'User' => 'RainLab\User\Models\User',
        'Implementer' => [
            'Backend\Models\User', 'key' => 'implementer_user_id',
            'scope' => 'isImplementer',
        ],
        'Reviewer' => [
            'Backend\Models\User', 'key' => 'reviewer_user_id',
            'scope' => 'isReviewer'
        ],
        'Service' => 'Worcbox\Syaq\Models\Service',
        'Field' => 'Worcbox\Syaq\Models\Field',
        'TypingMode' => 'Worcbox\Syaq\Models\TypingMode',
        'SpeechFormat' => 'Worcbox\Syaq\Models\SpeechFormat',
        'AudienceGender' => 'Worcbox\Syaq\Models\AudienceGender',
        'TitleField' => 'Worcbox\Syaq\Models\TitleField',
    ];
//    pro

    public $hasMany = [
        'OrderAttachments' => 'Worcbox\Syaq\Models\OrderAttachment',
        'OrderHistories' => 'Worcbox\Syaq\Models\OrderHistory',
    ];
    public $jsonable = ['OrderAttachments'];
    
    public function beforeUpdate() {
        unset($this->attributes['history_note']);
//        exit();
    }

    public function filterFields($fields, $context = null) {
        if (BackendAuth::getUser()->role_id != 6) {
            $fields->status->hidden = true;
        }
        return $fields;
    }

}
