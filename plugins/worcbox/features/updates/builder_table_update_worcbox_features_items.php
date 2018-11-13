<?php namespace Worcbox\Features\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxFeaturesItems extends Migration
{
    public function up()
    {
        Schema::rename('worcbox_features_', 'worcbox_features_items');
        Schema::table('worcbox_features_items', function($table)
        {
            $table->string('title')->change();
        });
    }
    
    public function down()
    {
        Schema::rename('worcbox_features_items', 'worcbox_features_');
        Schema::table('worcbox_features_', function($table)
        {
            $table->string('title', 191)->change();
        });
    }
}
