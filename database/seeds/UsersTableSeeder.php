<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'=>'1',
            'name'=>'Admin Zaman',
            'username'=>'admin',
            'email'=>'zamanwebdeveloper@gmail.com',
            'password'=>bcrypt('zamanwebdeveloper'),
        ]);
        DB::table('users')->insert([
            'role_id'=>'2',
            'name'=>'Author Zaman',
            'username'=>'author',
            'email'=>'zamancsediue44@gmail.com',
            'password'=>bcrypt('zamancsediue44'),
        ]);


    }
}
