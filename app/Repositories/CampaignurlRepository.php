<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Campaignurl;

class CampaignurlRepository extends ModuleRepository
{
    public function __construct(Campaignurl $model)
    {
        $this->model = $model;
    }
}
