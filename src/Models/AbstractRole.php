<?php

namespace Victor\WorkerRoles\Models;

abstract class AbstractRole
{
    protected $actions = [];

    public function getActionList()
    {
        return $this->actions;
    }
}