<?php namespace Worcbox\Features\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxFeaturesItems5 extends Migration
{
    public function up()
    {
        Schema::table('worcbox_features_items', function($table)
        {
            $table->integer('sort_order');
        });
    }
    
    public function down()
    {
        Schema::table('worcbox_features_items', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
