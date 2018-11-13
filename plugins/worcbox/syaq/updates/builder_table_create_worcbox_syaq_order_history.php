<?php namespace Worcbox\Syaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWorcboxSyaqOrderHistory extends Migration
{
    public function up()
    {
        Schema::create('worcbox_syaq_order_history', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('order_id');
            $table->integer('manager_id')->nullable();
            $table->integer('implementer_id')->nullable();
            $table->integer('reviewer_id')->nullable();
            $table->string('status');
            $table->integer('order_attachment_id')->nullable();
            $table->string('note')->nullable();
            $table->timestamp('created_at');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('worcbox_syaq_order_history');
    }
}
