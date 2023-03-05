<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleNesting;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Campaign;

class CampaignRepository extends ModuleRepository
{
    use HandleBlocks, HandleSlugs, HandleNesting;

    public function __construct(Campaign $model)
    {
        $this->model = $model;
    }

    public function afterSave($object, $fields)
    {
        $this->updateRepeater($object, $fields, 'urls', 'Campaignurl', 'campaign-url');
        parent::afterSave($object, $fields);
    }

    public function getFormFields($object)
    {
        $fields = parent::getFormFields($object);
        $fields = $this->getFormFieldsForRepeater($object, $fields, 'urls', 'Campaignurl', 'campaign-url');
        return $fields;
    }
}
