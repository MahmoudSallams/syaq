<?php namespace Worcbox\Syaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWorcboxSyaqOrders extends Migration
{
    public function up()
    {
        Schema::create('worcbox_syaq_orders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('service_id');
            $table->integer('quantity');
            $table->integer('words_count');
            $table->integer('days_count');
            $table->boolean('high_quality');
            $table->string('topic');
            $table->integer('field_id');
            $table->integer('audience_gender_id')->nullable();
            $table->integer('speech_format_id')->nullable();
            $table->integer('title_field_id')->nullable();
            $table->integer('typing_mode_id')->nullable();
            $table->text('audience_identification');
            $table->text('notes')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('worcbox_syaq_orders');
    }
}
