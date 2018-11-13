<?php

namespace Worcbox\Syaq\Models;

use Model;

/**
 * Model
 */
class OrderAttachment extends Model {
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'worcbox_syaq_order_attachments';
    public $attachOne = [
        'content' => 'System\Models\File'
    ];
    public $belongsTo = [
        'Implementer' => [
            'Backend\Models\User', 'key' => 'implementer_user_id',
            'scope' => 'isImplementer',
        ],
        'Reviewer' => [
            'Backend\Models\User', 'key' => 'reviewer_user_id',
            'scope' => 'isReviewer'
        ],
        'Order' => 'Worcbox\Syaq\Models\Order',
    ];

}
