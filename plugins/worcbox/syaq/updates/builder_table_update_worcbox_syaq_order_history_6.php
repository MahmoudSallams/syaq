<?php namespace Worcbox\Syaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxSyaqOrderHistory6 extends Migration
{
    public function up()
    {
        Schema::table('worcbox_syaq_order_history', function($table)
        {
            $table->integer('implementer_user_id')->nullable();
            $table->integer('reviewer_user_id')->nullable();
            $table->dropColumn('implementer_id');
            $table->dropColumn('reviewer_id');
        });
    }
    
    public function down()
    {
        Schema::table('worcbox_syaq_order_history', function($table)
        {
            $table->dropColumn('implementer_user_id');
            $table->dropColumn('reviewer_user_id');
            $table->integer('implementer_id')->nullable();
            $table->integer('reviewer_id')->nullable();
        });
    }
}
