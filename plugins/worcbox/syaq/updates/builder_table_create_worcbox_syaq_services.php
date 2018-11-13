<?php namespace Worcbox\Syaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWorcboxSyaqServices extends Migration
{
    public function up()
    {
        Schema::create('worcbox_syaq_services', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->integer('minimum_words_count')->unsigned();
            $table->double('basic_cost', 10, 0);
            $table->integer('basic_duration_in_days')->unsigned();
            $table->double('express_cost', 10, 0)->nullable();
            $table->integer('express_duration_in_days')->nullable()->unsigned();
            $table->double('high_quality_cost', 10, 0)->nullable();
            $table->integer('extra_block_words_count')->nullable()->unsigned();
            $table->double('extra_block_cost', 10, 0)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('worcbox_syaq_services');
    }
}
