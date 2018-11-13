<?php namespace Worcbox\Syaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxSyaqOrderHistory3 extends Migration
{
    public function up()
    {
        Schema::table('worcbox_syaq_order_history', function($table)
        {
            $table->dateTime('create_id')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('worcbox_syaq_order_history', function($table)
        {
            $table->dropColumn('create_id');
            $table->dropColumn('updated_at');
        });
    }
}
