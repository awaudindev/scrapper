<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\SingletonModuleController as BaseModuleController;

class CommentController extends BaseModuleController
{
    protected $moduleName = 'comments';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
