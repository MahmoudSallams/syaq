<?php namespace Worcbox\Syaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxSyaqServices extends Migration
{
    public function up()
    {
        Schema::table('worcbox_syaq_services', function($table)
        {
            $table->boolean('active')->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('worcbox_syaq_services', function($table)
        {
            $table->dropColumn('active');
        });
    }
}
