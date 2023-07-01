<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@aricom.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('MyP@$$w0rd1'),
                'active' => 1,
                'type' => 'admin',
                'remember_token' => NULL,
                'created_at' => '2023-07-01 16:47:02',
                'updated_at' => '2023-07-01 16:47:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Frank Baresi',
                'email' => 'frankbaresi@aricom.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('MyP@$$w0rd1'),
                'active' => 1,
                'type' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-01 16:47:02',
                'updated_at' => '2023-07-01 16:47:02',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'John Terry',
                'email' => 'johnterry@aricom.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('MyP@$$w0rd1'),
                'active' => 0,
                'type' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-01 16:47:02',
                'updated_at' => '2023-07-01 16:47:02',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Ryan Giggs',
                'email' => 'ryangiggs@aricom.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('MyP@$$w0rd1'),
                'active' => 0,
                'type' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-01 16:47:02',
                'updated_at' => '2023-07-01 16:47:02',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Mark Fish',
                'email' => 'markfish@aricom.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('MyP@$$w0rd1'),
                'active' => 0,
                'type' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-01 16:47:02',
                'updated_at' => '2023-07-01 16:47:02',
            ),
        ));
    }
}
