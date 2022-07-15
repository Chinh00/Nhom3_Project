<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fullName' => 'Admin',
            'userName' => 'Admin',
            'email' => 'Chinhnb0702@gmail.com',
            'password' => bcrypt('admin'),
            'phone' => '03125468530',
            'address' => 'dfsdfsdfds',
            'role' => 'admin',
            'status' => 'active',

        ]);

    }

}
