<?php

namespace Database\Seeders;

use App\Models\User;
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
            'name' => 'super admin',
            'email' => 'a@m.com',
            'password' => Hash::make('123456789'),
            'role_id' => 1,
        ]);
        User::create([
            'name' => 'Mazhar',
            'email' => 'm@m.com',
            'password' => Hash::make('123456789'),
            'role_id' => 1,
        ]);
    }
}
