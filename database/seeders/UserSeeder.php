<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin_user = User::create([
            'name' => 'Admin',
            'email' => 'admin@blog.dev',
            'password' => Hash::make(env('ADMIN_USER_PASSWORD'))
        ]);

        $admin_user->assignRole('Admin');
    }
}
