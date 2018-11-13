<?php namespace Worcbox\Syaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWorcboxSyaqAudienceGenders extends Migration
{
    public function up()
    {
        Schema::create('worcbox_syaq_audience_genders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->boolean('active')->default(1);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('worcbox_syaq_audience_genders');
    }
}
