<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'fullName'=>'Duc Anh admin',
                'userName'=>'Admin',
                'email'=>'Ducanh.admin@gmail.com',
                'password'=>Hash::make('12345678'),
                'phone'=>'03125468530',
                'address'=>'Tohieu',
                'role'=>'admin',
                'status'=>'active',
            ],
            [
                'fullName'=>'staff',
                'userName'=>'staff',
                'email'=>'staff@gmail.com',
                'password'=>Hash::make('12345678'),
                'phone'=>'03525468530',
                'address'=>'Tohieu',
                'role'=>'staff',
                'status'=>'active',
            ],
            [
                'fullName'=>'Em va Trinh',
                'userName'=>'customer',
                'email'=>'customer@gmail.com',
                'password'=>Hash::make('12345678'),
                'phone'=>'03125498530',
                'address'=>'Tohieu',
                'role'=>'customer',
                'status'=>'active',
            ],
        ]);
    }
}
