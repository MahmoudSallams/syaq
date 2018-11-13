<?php namespace Worcbox\Syaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxSyaqOrderHistory2 extends Migration
{
    public function up()
    {
        Schema::table('worcbox_syaq_order_history', function($table)
        {
            $table->dropColumn('created_at');
        });
    }
    
    public function down()
    {
        Schema::table('worcbox_syaq_order_history', function($table)
        {
            $table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
        });
    }
}
