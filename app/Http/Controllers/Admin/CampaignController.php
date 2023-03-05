<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\NestedModuleController as BaseModuleController;

class CampaignController extends BaseModuleController
{
    protected $moduleName = 'campaigns';

    protected $indexOptions = [
        'reorder' => false,
    ];

    protected $indexColumns = [
        'newTitle' => [
            'title' => 'Title',
            'field' => 'title'
        ]
    ];

    protected $showOnlyParentItemsInBrowsers = true;

    protected $nestedItemsDepth = 1;

    public function detail($id)
    {
        return view('admin.campaigns.detail');
    }
}
