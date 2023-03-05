<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTables extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            $table->json('comment_data');
            $table->foreignId('campaignurl_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('campaign_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        

        

        
    }

    public function down()
    {
        
        Schema::dropIfExists('comments');
    }
}
