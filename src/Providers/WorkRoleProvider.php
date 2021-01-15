<?php

namespace Victor\WorkerRoles\Providers;

use Illuminate\Support\ServiceProvider;
use Victor\WorkerRoles\Commands\EmployeeActions;
use Victor\WorkerRoles\Commands\EmployeeCan;

class WorkRoleProvider extends ServiceProvider
{
    protected $commands = [
        EmployeeActions::class,
        EmployeeCan::class,
    ];

    public function register()
    {
        $this->commands($this->commands);
    }
}