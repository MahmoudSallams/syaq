<?php namespace Worcbox\Syaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxSyaqOrders8 extends Migration
{
    public function up()
    {
        Schema::table('worcbox_syaq_orders', function($table)
        {
            $table->text('test')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('worcbox_syaq_orders', function($table)
        {
            $table->dropColumn('test');
        });
    }
}
