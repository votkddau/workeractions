<?php

namespace Victor\WorkerRoles\Models\Roles;

use Victor\WorkerRoles\Enums\ActionEnum;
use Victor\WorkerRoles\Models\AbstractRole;

class Programmer extends AbstractRole
{
    protected $actions = [
        ActionEnum::WRITE_CODE,
        ActionEnum::TEST_CODE,
        ActionEnum::TALK_MANAGER,
    ];
}