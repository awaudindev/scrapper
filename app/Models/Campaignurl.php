<?php

namespace App\Models;


use A17\Twill\Models\Model;

class Campaignurl extends Model 
{
    

    protected $fillable = [
        'published',
        'url',
        'campaign_id'
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
