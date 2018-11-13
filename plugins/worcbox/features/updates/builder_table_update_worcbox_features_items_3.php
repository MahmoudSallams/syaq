<?php namespace Worcbox\Features\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxFeaturesItems3 extends Migration
{
    public function up()
    {
        Schema::table('worcbox_features_items', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('worcbox_features_items', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
