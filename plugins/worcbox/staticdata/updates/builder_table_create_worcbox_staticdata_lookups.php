<?php namespace Worcbox\StaticData\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWorcboxStaticdataLookups extends Migration
{
    public function up()
    {
        Schema::create('worcbox_staticdata_lookups', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('code', 255);
            $table->text('key');
            $table->text('value');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('worcbox_staticdata_lookups');
    }
}
