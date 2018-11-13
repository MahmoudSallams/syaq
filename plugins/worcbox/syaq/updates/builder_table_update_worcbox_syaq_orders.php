<?php namespace Worcbox\Syaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxSyaqOrders extends Migration
{
    public function up()
    {
        Schema::table('worcbox_syaq_orders', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('topic')->change();
        });
    }
    
    public function down()
    {
        Schema::table('worcbox_syaq_orders', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->increments('id')->unsigned()->change();
            $table->string('topic', 191)->change();
        });
    }
}
