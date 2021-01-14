<?php

namespace Victor\WorkerRoles\Roles;

use Victor\WorkerRoles\Common\RoleEnum;

class RoleFabric
{
    /**
     * @param RoleEnum $role
     * @return BaseRole
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