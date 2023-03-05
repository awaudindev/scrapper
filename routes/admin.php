<?php

use Illuminate\Support\Facades\Route;

// Register Twill routes here eg.
Route::group(['prefix' => 'analytics'], function () {
    Route::module('campaigns', [], ['only' => ['index', 'create', 'update', 'edit', 'store', 'destroy']]);
    Route::module('campaigns.urls');
    Route::name('campaign.detail')->get('/campaigns/{id}/detail','CampaignController@detail');
});
