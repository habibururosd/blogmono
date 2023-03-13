<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            User::create([
                'name' => 'Super Admin',
                'role_id' => 1,
                'email' => 'superadmin@email.com',
                'password' => Hash::make('123456'),
            ]);

            User::create([
                'name' => 'Sub Admin',
                'role_id' => 2,
                'email' => 'subadmin@email.com',
                'password' => Hash::make('123456'),
            ]);

    }
}
