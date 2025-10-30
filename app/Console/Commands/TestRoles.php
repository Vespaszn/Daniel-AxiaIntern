<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Spatie\Permission\Models\Role;

class TestRoles extends Command
{
    protected $signature = 'test:roles';
    protected $description = 'Test role-based access';

    public function handle()
    {
        // Assign role to a user (example)
        $user = User::first();
        if ($user) {
            $user->assignRole('SuperAdmin');
            $this->info('Assigned SuperAdmin role to user: ' . $user->name);
        }

        $this->info('Role testing completed!');
    }
}