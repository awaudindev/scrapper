<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignurlsTables extends Migration
{
    public function up()
    {
        Schema::create('campaignurls', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('url', 100);
            $table->foreignId('campaign_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        
    }

    public function down()
    {
        
        Schema::dropIfExists('campaignurls');
    }
}
