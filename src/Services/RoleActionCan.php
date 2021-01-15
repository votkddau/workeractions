<?php

namespace Victor\WorkerRoles\Services;

use Victor\WorkerRoles\Enums\ActionEnum;
use Victor\WorkerRoles\Enums\RoleEnum;
use Victor\WorkerRoles\Models\RoleFactory;

class RoleActionCan
{
    public function run(RoleEnum $role, ActionEnum $actionEnum)
    {
        $employee = RoleFactory::getInstance($role);
        $action = $actionEnum->getValue();
        return in_array($action, $employee->getActionList());
    }
}