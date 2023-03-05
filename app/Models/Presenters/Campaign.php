<?php 

namespace App\Models\Presenters;

use App\Models\Campaign;

class CampaignPresenter extends Presenter
{
    public function newTitle()
    {
        return $this->title;
    }
}