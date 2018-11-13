<?php namespace Worcbox\Packages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWorcboxPackagesItems extends Migration
{
    public function up()
    {
        Schema::create('worcbox_packages_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->double('price', 10, 0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('worcbox_packages_items');
    }
}
