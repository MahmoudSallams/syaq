<?php namespace Worcbox\Syaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWorcboxSyaqFields extends Migration
{
    public function up()
    {
        Schema::create('worcbox_syaq_fields', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->integer('active')->default(1);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('worcbox_syaq_fields');
    }
}
