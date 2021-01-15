<?php

namespace Victor\WorkerRoles\Models\Roles;

use Victor\WorkerRoles\Enums\ActionEnum;
use Victor\WorkerRoles\Models\AbstractRole;

class Designer extends AbstractRole
{
    protected $actions = [
        ActionEnum::DRAW,
        ActionEnum::TALK_MANAGER,
    ];
}