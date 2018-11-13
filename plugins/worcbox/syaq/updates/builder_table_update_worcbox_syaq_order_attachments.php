<?php namespace Worcbox\Syaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWorcboxSyaqOrderAttachments extends Migration
{
    public function up()
    {
        Schema::table('worcbox_syaq_order_attachments', function($table)
        {
            $table->renameColumn('reviewere_user_id', 'reviewer_user_id');
        });
    }
    
    public function down()
    {
        Schema::table('worcbox_syaq_order_attachments', function($table)
        {
            $table->renameColumn('reviewer_user_id', 'reviewere_user_id');
        });
    }
}
