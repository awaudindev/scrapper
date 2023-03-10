<?php 

namespace App\Models\Presenters;

use App\Models\Campaign;

class CampaignPresenter extends Presenter
{
    public function newDate()
    {
        return date('d M Y', strtotime($this->created_at));
    }
    
    public function changeTitle()
    {
        return $this->urls->count();
    }

    public function detailButton()
    {
        return '<a href="'.route('admin.campaign.detail',$this->id).'">See Detail</a>';
    }

}