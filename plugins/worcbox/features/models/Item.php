<?php

namespace Worcbox\Features\Models;

use Model;

/**
 * Model
 */
class Item extends Model {
    use \October\Rain\Database\Traits\Validation;
use \October\Rain\Database\Traits\Sortable;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */

    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'worcbox_features_items';
    public $attachOne = [
        'icon' => 'System\Models\File'
    ];

//    const SORT_ORDER = 'title';

}
