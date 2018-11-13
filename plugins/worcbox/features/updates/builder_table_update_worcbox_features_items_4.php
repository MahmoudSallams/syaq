<?php namespace Worcbox\Features\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxFeaturesItems4 extends Migration
{
    public function up()
    {
        Schema::table('worcbox_features_items', function($table)
        {
            $table->string('type')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('worcbox_features_items', function($table)
        {
            $table->dropColumn('type');
        });
    }
}
