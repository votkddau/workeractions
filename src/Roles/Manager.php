<?php

namespace Victor\WorkerRoles\Roles;

use Victor\WorkerRoles\Common\ActionEnum;

class Manager extends BaseRole
{
    protected $actions = [
        ActionEnum::WRITE_TASK,
    ];
}