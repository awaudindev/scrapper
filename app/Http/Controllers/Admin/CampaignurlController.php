<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class CampaignurlController extends BaseModuleController
{
    protected $moduleName = 'campaignurls';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
