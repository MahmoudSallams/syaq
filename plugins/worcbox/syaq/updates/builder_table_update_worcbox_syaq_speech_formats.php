<?php namespace Worcbox\Syaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxSyaqSpeechFormats extends Migration
{
    public function up()
    {
        Schema::rename('worcbox_syaq_', 'worcbox_syaq_speech_formats');
        Schema::table('worcbox_syaq_speech_formats', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->string('name')->change();
        });
    }
    
    public function down()
    {
        Schema::rename('worcbox_syaq_speech_formats', 'worcbox_syaq_');
        Schema::table('worcbox_syaq_', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->string('name', 191)->change();
        });
    }
}
