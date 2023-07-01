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
                'name' => 'Ekeoma',
                'last_name' => 'Ebiri-Okoro',
                'email' => 'swissfair@yahoo.co.uk',
                'slug' => 'ekeoma-ebiri-okoro',
                'email_verified_at' => NULL,
                'password' => Hash::make('MyP@$$w0rd1'),
                'active' => 1,
                'remember_token' => NULL,
                'created_at' => '2023-01-07 16:47:02',
                'updated_at' => '2023-01-07 16:47:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Frank',
                'last_name' => 'Baresi',
                'email' => 'frankbaresi@example.com',
                'slug' => 'frank-baresi',
                'email_verified_at' => NULL,
                'password' => Hash::make('MyP@$$w0rd1'),
                'active' => 1,
                'remember_token' => NULL,
                'created_at' => '2023-01-07 16:47:02',
                'updated_at' => '2023-01-07 16:47:02',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'John',
                'last_name' => 'Terry',
                'email' => 'johnterry@example.com',
                'slug' => 'john-terry',
                'email_verified_at' => NULL,
                'password' => Hash::make('MyP@$$w0rd1'),
                'active' => 1,
                'remember_token' => NULL,
                'created_at' => '2023-01-07 16:47:02',
                'updated_at' => '2023-01-07 16:47:02',,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Ryan',
                'last_name' => 'Giggs',
                'email' => 'ryangiggs@example.com',
                'slug' => 'ryan-giggs',
                'email_verified_at' => NULL,
                'password' => Hash::make('MyP@$$w0rd1'),
                'active' => 1,
                'remember_token' => NULL,
                'created_at' => '2023-01-07 16:47:02',
                'updated_at' => '2023-01-07 16:47:02',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Mark',
                'last_name' => 'Fish',
                'email' => 'markfish@example.com',
                'slug' => 'mark-fish',
                'email_verified_at' => NULL,
                'password' => Hash::make('MyP@$$w0rd1'),
                'active' => 1,
                'remember_token' => NULL,
                'created_at' => '2023-01-07 16:47:02',
                'updated_at' => '2023-01-07 16:47:02',
            ),
        ));
    }
}
