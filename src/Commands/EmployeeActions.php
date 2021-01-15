<?php

namespace Victor\WorkerRoles\Commands;

use Illuminate\Console\Command;
use Victor\WorkerRoles\Enums\ActionEnum;
use Victor\WorkerRoles\Enums\RoleEnum;
use Victor\WorkerRoles\Services\RoleActionList;

class EmployeeActions extends Command
{
    protected $signature = 'employee:actions 
                                    {role : "designer", "manager", "programmer", "tester"}';

    protected $description = 'Displays available action list for role';

    public function handle()
    {
        try {
            $roleEnum = new RoleEnum($this->argument('role'));
            $service = new RoleActionList();
            $result = $service->run($roleEnum);
            foreach ($result as $action) {
                $this->info('  -  ' . ActionEnum::getTitleByKey($action));
            }
        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }
    }
}