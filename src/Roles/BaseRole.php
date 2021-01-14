<?php

namespace Victor\WorkerRoles\Roles;

abstract class BaseRole
{
    protected $actions = [];

    public function getActionList()
    {
        return $this->actions;
    }
}