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
            'user_type' => '0',
            'name' => 'Public',
            'email' => 'public@gmail.com',
            'password' => bcrypt('public@gmail.com'),
        ]);
        DB::table('users')->insert([
            'user_type' => '1',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@gmail.com'),
        ]);

        DB::table('users')->insert([
            'user_type' => '2',
            'name' => 'Customer',
            'email' => 'customer@gmail.com',
            'password' => bcrypt('customer@gmail.com'),
        ]);

        DB::table('users')->insert([
            'user_type' => '3',
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('manager@gmail.com'),
        ]);

        DB::table('users')->insert([
            'user_type' => '4',
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('manager@gmail.com'),
        ]);
        DB::table('users')->insert([
            'user_type' => '5',
            'name' => 'Director',
            'email' => 'director@gmail.com',
            'password' => bcrypt('director@gmail.com'),
        ]);
    }
}
