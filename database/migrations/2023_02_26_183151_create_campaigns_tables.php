<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTables extends Migration
{
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->integer('position')->unsigned()->nullable();
            $table->nestedSet();
        });

        Schema::create('campaign_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'campaign');
        });

        
    }

    public function down()
    {
        
        Schema::dropIfExists('campaign_slugs');
        Schema::dropIfExists('campaigns');
    }
}
