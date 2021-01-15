<?php

namespace Victor\WorkerRoles\Services;

use Victor\WorkerRoles\Enums\RoleEnum;
use Victor\WorkerRoles\Models\RoleFactory;

class RoleActionList
{
    public function run(RoleEnum $role)
    {
        $employee = RoleFactory::getInstance($role);
        return $employee->getActionList();
    }
}