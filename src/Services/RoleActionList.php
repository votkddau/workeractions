<?php

namespace Victor\WorkerRoles\Services;

use Victor\WorkerRoles\Common\RoleEnum;
use Victor\WorkerRoles\Roles\RoleFabric;

class RoleActionList
{
    public function run(RoleEnum $role)
    {
        $employee = RoleFabric::getInstance($role);
        return $employee->getActionList();
    }
}