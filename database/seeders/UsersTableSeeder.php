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
                'id' => 1,
                'name' => 'Anselmus',
                'email' => 'anselmusrusdiatmaja@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DEMHmydfCQd331VdHiD3HuGh6eehfZ39jLhkRrwBduVk7KxzHae1S',
                'lname' => 'Rusdiatmaja',
                'phone' => '085123123123',
                'address1' => 'Jl.Senopati',
                'address2' => 'Belakang Studio Foto',
                'city' => 'Kabupaten Badung',
                'state' => 'Bali',
                'country' => 'Indonesia',
                'pincode' => '55711',
                'role_as' => 1,
                'remember_token' => 'vTgQ65KIOSTT6crtT7mRXsIrNr2V0sBVRVAMYZTLp0saw9R49a7MSSRhucwE',
                'created_at' => '2022-11-15 15:55:11',
                'updated_at' => '2022-12-20 15:18:38',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'user',
                'email' => 'user2@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$53kN8YgEgxW2g3UkbGgDEOReIisG8UikopqIb0qmOO84qsXPMc9Y.',
                'lname' => 'two',
                'phone' => '085105648597',
                'address1' => 'Jl.Affandi',
                'address2' => 'Depan Warung Kelontong',
                'city' => 'Kabupaten Badung',
                'state' => 'Bali',
                'country' => 'Indonesia',
                'pincode' => '66781',
                'role_as' => 0,
                'remember_token' => 'QR8vxE8d1v8VvDYL09m6i7zLYNKujP8TvhwBZMNc2dgNK7fUjMu1DI88QEKA',
                'created_at' => '2022-11-15 17:13:28',
                'updated_at' => '2023-01-05 00:08:26',
            ),
        ));
        
        
    }
}