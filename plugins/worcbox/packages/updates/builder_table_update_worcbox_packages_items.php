<?php namespace Worcbox\Packages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxPackagesItems extends Migration
{
    public function up()
    {
        Schema::table('worcbox_packages_items', function($table)
        {
            $table->string('line_1')->nullable();
            $table->string('line_2')->nullable();
            $table->string('line_3')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('worcbox_packages_items', function($table)
        {
            $table->dropColumn('line_1');
            $table->dropColumn('line_2');
            $table->dropColumn('line_3');
        });
    }
}
