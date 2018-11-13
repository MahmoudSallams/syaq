<?php namespace Worcbox\Syaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxSyaqOrders7 extends Migration
{
    public function up()
    {
        Schema::table('worcbox_syaq_orders', function($table)
        {
            $table->double('total', 10, 0)->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('worcbox_syaq_orders', function($table)
        {
            $table->dropColumn('total');
        });
    }
}
