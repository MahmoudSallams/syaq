<?php namespace Worcbox\Features\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxFeaturesItems6 extends Migration
{
    public function up()
    {
        Schema::table('worcbox_features_items', function($table)
        {
            $table->integer('sort_order')->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('worcbox_features_items', function($table)
        {
            $table->integer('sort_order')->default(null)->change();
        });
    }
}
