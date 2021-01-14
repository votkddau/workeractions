<?php

namespace Victor\WorkerRoles\Roles;

use Victor\WorkerRoles\Common\ActionEnum;

class Programmer extends BaseRole
{
    protected $actions = [
        ActionEnum::WRITE_CODE,
        ActionEnum::TEST_CODE,
        ActionEnum::TALK_MANAGER,
    ];
}