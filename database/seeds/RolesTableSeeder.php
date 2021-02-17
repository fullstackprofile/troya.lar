<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([
            'role_name' => 'Admin',
            'role_slug' => 'admin',
        ]);

        DB::table('roles')->insert([
            'role_name' => 'Customer',
            'role_slug' => 'customer',
        ]);

        DB::table('roles')->insert([
            'role_name' => 'Manager',
            'role_slug' => 'manager',
        ]);

        DB::table('roles')->insert([
            'role_name' => 'Director',
            'role_slug' => 'director',
        ]);

        DB::table('roles')->insert([
            'role_name' => 'Engineer',
            'role_slug' => 'engineer',
        ]);

        DB::table('roles')->insert([
            'role_name' => 'Groupmng',
            'role_slug' => 'groupmng',
        ]);

        DB::table('roles')->insert([
            'role_name' => 'Tpmanager',
            'role_slug' => 'tpmanager',
        ]);

        DB::table('roles')->insert([
            'role_name' => 'Tpdirector',
            'role_slug' => 'tpdirector',
        ]);

        DB::table('roles')->insert([
            'role_name' => 'Public',
            'role_slug' => 'public',
        ]);
    }
}
