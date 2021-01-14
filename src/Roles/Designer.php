<?php

namespace Victor\WorkerRoles\Roles;

use Victor\WorkerRoles\Common\ActionEnum;

class Designer extends BaseRole
{
    protected $actions = [
        ActionEnum::DRAW,
        ActionEnum::TALK_MANAGER,
    ];
}