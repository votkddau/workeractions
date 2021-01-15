<?php

namespace Victor\WorkerRoles\Models;

use Victor\WorkerRoles\Enums\RoleEnum;
use Victor\WorkerRoles\Models\Roles\Designer;
use Victor\WorkerRoles\Models\Roles\Manager;
use Victor\WorkerRoles\Models\Roles\Programmer;
use Victor\WorkerRoles\Models\Roles\Tester;

class RoleFactory
{
    /**
     * @param RoleEnum $role
     * @return AbstractRole
     */
    public static function getInstance(RoleEnum $role)
    {
        $value = $role->getValue();
        switch ($value) {
            case RoleEnum::DESIGNER:
                return new Designer();
            case RoleEnum::MANAGER:
                return new Manager();
            case RoleEnum::PROGRAMMER:
                return new Programmer();
            case RoleEnum::TESTER:
                return new Tester();
        }
    }
}