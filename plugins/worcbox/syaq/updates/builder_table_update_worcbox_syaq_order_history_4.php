<?php namespace Worcbox\Syaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxSyaqOrderHistory4 extends Migration
{
    public function up()
    {
        Schema::table('worcbox_syaq_order_history', function($table)
        {
            $table->renameColumn('idd', 'id');
        });
    }
    
    public function down()
    {
        Schema::table('worcbox_syaq_order_history', function($table)
        {
            $table->renameColumn('id', 'idd');
        });
    }
}
