<?php

namespace Worcbox\Syaq\Models;

use Model;

/**
 * Model
 */
class OrderHistory extends Model {

    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'worcbox_syaq_order_histories';
    /**
     * @var array Validation rules
     */
    
    public $rules = [
    ];
    
    protected $fillable = [
        'order_id',
        'manager_user_id',
        'implementer_user_id',
        'reviewer_user_id',
        'status',
        'order_attachment_id',
        'notes',        
    ];
    
    
    public $belongsTo = [
        'Manager' => [
            'Backend\Models\User', 'key' => 'manager_user_id'
        ],
        'Implementer' => [
            'Backend\Models\User', 'key' => 'implementer_user_id'
        ],
        'Reviewer' => [
            'Backend\Models\User', 'key' => 'reviewer_user_id'
        ],
        'Order' => [
            'Worcbox\Syaq\Models\Order'
        ],
        'OrderAttachment' => [
            'Worcbox\Syaq\Models\OrderAttachment'
        ],
    ];


}
