<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'address1' => 'test2',
                'address2' => 'test',
                'city' => 'Kabupaten Bantul',
                'country' => 'Indonesia',
                'created_at' => '2022-11-15 15:55:11',
                'email' => 'anselmusrusdiatmaja@gmail.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'lname' => 'Rusdiatmaja',
                'name' => 'Anselmus',
                'password' => '$2y$10$DEMHmydfCQd331VdHiD3HuGh6eehfZ39jLhkRrwBduVk7KxzHae1S',
                'phone' => '085123123123',
                'pincode' => '55711',
                'remember_token' => 'ZnCI19pyti5W0kAGzOscLYmXa0aErvG3DVW1EQCV9XnD93cjZaPunSbVPJQ8',
                'role_as' => 1,
                'state' => 'DI Yogyakarta',
                'updated_at' => '2022-11-29 01:54:38',
            ),
            1 => 
            array (
                'address1' => 'Jl.Affandi',
                'address2' => 'Depan Warung Kelontong',
                'city' => 'Kota Jayapura',
                'country' => 'Indonesia',
                'created_at' => '2022-11-15 17:13:28',
                'email' => 'user2@gmail.com',
                'email_verified_at' => NULL,
                'id' => 3,
                'lname' => 'two',
                'name' => 'user',
                'password' => '$2y$10$53kN8YgEgxW2g3UkbGgDEOReIisG8UikopqIb0qmOO84qsXPMc9Y.',
                'phone' => '085105648597',
                'pincode' => '66781',
                'remember_token' => '8r2iyFdsX6Lsuv3bxhUEiSZklKDfptBbnjeyy2iPfJFsiir43EiptLSOz5JY',
                'role_as' => 0,
                'state' => 'Papua',
                'updated_at' => '2022-12-04 16:00:19',
            ),
        ));
        
        
    }
}