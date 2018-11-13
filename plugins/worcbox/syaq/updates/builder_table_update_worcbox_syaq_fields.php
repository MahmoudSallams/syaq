<?php namespace Worcbox\Syaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxSyaqFields extends Migration
{
    public function up()
    {
        Schema::table('worcbox_syaq_fields', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->string('name')->change();
            $table->boolean('active')->nullable(false)->unsigned(false)->default(1)->change();
        });
    }
    
    public function down()
    {
        Schema::table('worcbox_syaq_fields', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->string('name', 191)->change();
            $table->integer('active')->nullable(false)->unsigned(false)->default(1)->change();
        });
    }
}
