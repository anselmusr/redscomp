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

        \DB::table('users')->insert(
            array(
                0 =>
                array(
                    'address1' => 'Melikan Kidul RT 07 Bantul',
                    'address2' => 'Belakang AXL Studio',
                    'city' => 'Kabupaten Bantul',
                    'country' => 'Indonesia',
                    'created_at' => '2022-11-15 15:55:11',
                    'email' => 'anselmusrusdiatmaja@gmail.com',
                    'email_verified_at' => NULL,
                    'id' => 1,
                    'lname' => 'R',
                    'name' => 'Anselmus',
                    'password' => '$2y$10$DEMHmydfCQd331VdHiD3HuGh6eehfZ39jLhkRrwBduVk7KxzHae1S',
                    'phone' => 'Anselmus',
                    'pincode' => '55711',
                    'remember_token' => 'HjGjFGPjj0OxIyeNM87pVfqRK0eEsWXoIMAv6iUetOQzGv6ZRkhcXu4TOyL8',
                    'role_as' => 1,
                    'state' => 'DI Yogyakarta',
                    'updated_at' => '2022-11-15 17:10:32',
                ),
                1 =>
                array(
                    'address1' => 'Sudirman',
                    'address2' => 'belakang rumah pak rt',
                    'city' => 'Kota Pontianak',
                    'country' => 'Indonesia',
                    'created_at' => '2022-11-15 15:57:56',
                    'email' => 'user1@gmail.com',
                    'email_verified_at' => NULL,
                    'id' => 2,
                    'lname' => 'one',
                    'name' => 'user',
                    'password' => '$2y$10$rVnf.1sa5rTH.r8sBiKJwOr0WIgrixx7pomJpbuvU2tpAQ68cqHFO',
                    'phone' => 'user',
                    'pincode' => '55810',
                    'remember_token' => NULL,
                    'role_as' => 0,
                    'state' => 'Kalimantan Barat',
                    'updated_at' => '2022-11-15 17:13:05',
                ),
                2 =>
                array(
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
                    'phone' => 'user',
                    'pincode' => '66781',
                    'remember_token' => NULL,
                    'role_as' => 0,
                    'state' => 'Papua',
                    'updated_at' => '2022-11-15 17:15:11',
                ),
            )
        );


    }
}
