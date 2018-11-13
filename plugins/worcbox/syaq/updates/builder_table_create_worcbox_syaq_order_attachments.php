<?php namespace Worcbox\Syaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWorcboxSyaqOrderAttachments extends Migration
{
    public function up()
    {
        Schema::create('worcbox_syaq_order_attachments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('note')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('implementer_user_id');
            $table->integer('reviewere_user_id')->nullable();
            $table->integer('order_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('worcbox_syaq_order_attachments');
    }
}
