<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Role::create(['name' => 'ADMIN']);

        // $admin = User::create([
        //     'name'              => 'Admin',
        //     'email'             => 'admin@simulindo.com',
        //     'password'          => Hash::make('12345678'),
        // ]);

        // $admin->assignRole('ADMIN');

        // Role::create(['name' => 'STAFF']);

        $admin = User::create([
            'name'              => 'Staff',
            'email'             => 'staff@simulindo.com',
            'password'          => Hash::make('12345678'),
        ]);

        $admin->assignRole('STAFF');
    }
}
