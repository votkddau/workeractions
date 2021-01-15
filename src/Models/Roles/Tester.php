<?php

namespace Victor\WorkerRoles\Models\Roles;

use Victor\WorkerRoles\Enums\ActionEnum;
use Victor\WorkerRoles\Models\AbstractRole;

class Tester extends AbstractRole
{
    protected $actions = [
        ActionEnum::TEST_CODE,
        ActionEnum::TALK_MANAGER,
        ActionEnum::WRITE_TASK,
    ];
}