<?php

namespace Victor\WorkerRoles\Models\Roles;

use Victor\WorkerRoles\Enums\ActionEnum;
use Victor\WorkerRoles\Models\AbstractRole;

class Manager extends AbstractRole
{
    protected $actions = [
        ActionEnum::WRITE_TASK,
    ];
}