<?php namespace Worcbox\Syaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxSyaqOrders6 extends Migration
{
    public function up()
    {
        Schema::table('worcbox_syaq_orders', function($table)
        {
            $table->integer('user_id')->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('worcbox_syaq_orders', function($table)
        {
            $table->integer('user_id')->nullable()->change();
        });
    }
}
