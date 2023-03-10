<?php

namespace App\Models;


use A17\Twill\Models\Model;

class Comment extends Model 
{
    protected $fillable = [
        'published',
        'comment_data',
        'campaignurl_id',
        'campaign_id'
    ];
    
}
