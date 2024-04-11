<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admin user
        $admin = User::create([
            'firstname' => 'admin',
            'lastname' => 'admin',
            'username' => 'admin',
            'email' => 'enligneservices5@gmail.com',
            'password' => Hash::make('Admin@229'),
            'email_verified_at' => now(),
        ]);

        // Create roles
        $adminRole = Role::create(['name' => 'admin']);
        Role::create(['name' => 'guide']);
        Role::create(['name' => 'user']);

        // Assign role to admin user
        $admin->assignRole($adminRole);
    }
}
