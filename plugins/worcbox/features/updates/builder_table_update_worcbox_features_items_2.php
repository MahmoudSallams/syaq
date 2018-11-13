<?php namespace Worcbox\Features\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxFeaturesItems2 extends Migration
{
    public function up()
    {
        Schema::table('worcbox_features_items', function($table)
        {
            $table->integer('id');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::table('worcbox_features_items', function($table)
        {
            $table->dropPrimary(['id']);
            $table->dropColumn('id');
        });
    }
}
