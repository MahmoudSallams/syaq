<?php namespace Worcbox\Features\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWorcboxFeatures extends Migration
{
    public function up()
    {
        Schema::create('worcbox_features_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('title');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('worcbox_features_');
    }
}
