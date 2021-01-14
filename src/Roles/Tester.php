<?php

namespace Victor\WorkerRoles\Roles;

use Victor\WorkerRoles\Common\ActionEnum;

class Tester extends BaseRole
{
    protected $actions = [
        ActionEnum::TEST_CODE,
        ActionEnum::TALK_MANAGER,
        ActionEnum::WRITE_TASK,
    ];
}