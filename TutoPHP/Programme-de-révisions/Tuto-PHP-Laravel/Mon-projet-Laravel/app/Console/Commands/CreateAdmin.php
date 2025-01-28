<?php

namespace App\Console\Commands\Admin;

use App\Models\User;
use Illuminate\Console\Command;

class CreateAdmin extends Command
{
    protected $signature = 'admin:create {name} {email} {password}';
    protected $description = 'Create a new admin user';

    public function handle()
    {
        $user = User::create([
            'name' => $this->argument('name'),
            'email' => $this->argument('email'),
            'password' => bcrypt($this->argument('password')),
        ]);

        // Assign role to admin (role logic to be implemented)

        $this->info('Admin user created successfully.');
    }
}
