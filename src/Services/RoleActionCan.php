<?php

namespace Victor\WorkerRoles\Services;

use Victor\WorkerRoles\Common\ActionEnum;
use Victor\WorkerRoles\Common\RoleEnum;
use Victor\WorkerRoles\Roles\RoleFabric;

class RoleActionCan
{
    public function run(RoleEnum $role, ActionEnum $actionEnum)
    {
        $employee = RoleFabric::getInstance($role);
        $action = $actionEnum->getValue();
        return in_array($action, $employee->getActionList());
    }
}