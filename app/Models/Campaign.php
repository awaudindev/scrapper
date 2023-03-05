<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\HasNesting;
use A17\Twill\Models\Behaviors\Sortable;
use App\Models\Presenters\CampaignPresenter;
use A17\Twill\Models\Model;

class Campaign extends Model implements Sortable
{
    use HasBlocks, HasSlug, HasPosition, HasNesting;

    public $presenterAdmin = CampaignPresenter::class;

    protected $fillable = [
        'published',
        'title',
        'position',
    ];
    
    public $slugAttributes = [
        'title',
    ];

    public function urls()
    {
        return $this->hasMany(Campaignurl::class);
    }
    
}
