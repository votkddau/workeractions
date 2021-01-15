<?php

namespace Victor\WorkerRoles\Commands;

use Illuminate\Console\Command;
use Victor\WorkerRoles\Enums\ActionEnum;
use Victor\WorkerRoles\Enums\RoleEnum;
use Victor\WorkerRoles\Services\RoleActionCan;

class EmployeeCan extends Command
{
    protected $signature = 'employee:can 
                                    {role : "designer", "manager", "programmer", "tester"} 
                                    {action : "draw", "talkManager", "testCode", "writeCode", "writeTask"}';

    protected $description = 'Checks role\'s permission to make the action.';

    public function handle()
    {
        try {
            $roleEnum = new RoleEnum($this->argument('role'));
            $actionEnum = new ActionEnum($this->argument('action'));
            $service = new RoleActionCan();
            if ($result = $service->run($roleEnum, $actionEnum)) {
                $this->info('Yes');
            } else {
                $this->error('No');
            }
        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }
    }

}