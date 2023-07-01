<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dashboard',
                'guard_name' => 'web',
                'created_at' => '2023-06-30 00:04:03',
                'updated_at' => '2023-06-30 00:04:03',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'activate',
                'guard_name' => 'web',
                'created_at' => '2023-06-30 00:04:03',
                'updated_at' => '2023-06-30 00:04:03',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'deactivate',
                'guard_name' => 'web',
                'created_at' => '2023-06-30 00:04:03',
                'updated_at' => '2023-06-30 00:04:03',
            ),
        ));
    }
}
