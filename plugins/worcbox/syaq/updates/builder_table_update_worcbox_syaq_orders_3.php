<?php namespace Worcbox\Syaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxSyaqOrders3 extends Migration
{
    public function up()
    {
        Schema::table('worcbox_syaq_orders', function($table)
        {
            $table->integer('reviewer_user_id')->nullable();
            $table->integer('implementer_user_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('worcbox_syaq_orders', function($table)
        {
            $table->dropColumn('reviewer_user_id');
            $table->dropColumn('implementer_user_id');
        });
    }
}
