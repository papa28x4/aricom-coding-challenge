<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2023-06-30 00:04:03',
                'updated_at' => '2023-06-30 00:04:03',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'User',
                'guard_name' => 'web',
                'created_at' => '2022-06-30 23:51:50',
                'updated_at' => '2022-06-30 23:51:50',
            ),
        ));
    }
}
