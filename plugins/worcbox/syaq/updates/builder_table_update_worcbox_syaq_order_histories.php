<?php namespace Worcbox\Syaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxSyaqOrderHistories extends Migration
{
    public function up()
    {
        Schema::rename('worcbox_syaq_order_history', 'worcbox_syaq_order_histories');
    }
    
    public function down()
    {
        Schema::rename('worcbox_syaq_order_histories', 'worcbox_syaq_order_history');
    }
}
