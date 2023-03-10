<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\NestedModuleController as BaseModuleController;
use App\Models\Campaign;

class CampaignController extends BaseModuleController
{
    protected $moduleName = 'campaigns';

    protected $titleColumnKey = 'title';

    protected $indexOptions = [
        'reorder' => false,
    ];

    protected $indexColumns = [
        'title' => [
            'title' => 'Campaign Title',
            'field' => 'title',
            'visible' => false
        ],
        'newdates' => [
            'title' => 'Create Date',
            'field' => 'newDate',
            'present' => true
        ],
        'newTitle' => [
            'title' => 'URLS',
            'field' => 'changeTitle',
            'present' => true
        ],
        'detail' => [
            'title' => 'Show Detail',
            'field' => 'detailButton',
            'present' => true
        ]
    ];

    protected $showOnlyParentItemsInBrowsers = true;

    protected $nestedItemsDepth = 1;

    public function detail($id)
    {
        $detail = Campaign::find($id);
        return view('admin.campaigns.detail', compact('detail'));
    }
}
