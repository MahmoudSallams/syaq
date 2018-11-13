<?php namespace Worcbox\StaticData\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxStaticdataLookups extends Migration
{
    public function up()
    {
        Schema::table('worcbox_staticdata_lookups', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->string('code', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('worcbox_staticdata_lookups', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->string('code', 255)->nullable(false)->change();
        });
    }
}
