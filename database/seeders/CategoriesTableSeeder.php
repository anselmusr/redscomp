<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Laptop Baru',
                'description' => 'Menyediakan berbagai laptop baru dengan harga terjangkau',
                'status' => 1,
                'popular' => 1,
                'image' => '1668530458.jpg',
                'created_at' => '2022-11-15 16:40:58',
                'updated_at' => '2022-11-15 16:40:58',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Laptop Second',
                'description' => 'Menyediakan laptop second dengan kondisi yang masih bagus',
                'status' => 1,
                'popular' => 1,
                'image' => '1668530652.jpg',
                'created_at' => '2022-11-15 16:44:12',
                'updated_at' => '2022-11-15 16:44:12',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Komputer Second',
                'description' => 'Menyediakan Komputer second dengan kondisi yang bagus',
                'status' => 1,
                'popular' => 1,
                'image' => '1668530701.jpg',
                'created_at' => '2022-11-15 16:45:01',
                'updated_at' => '2022-11-15 16:45:01',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Peripheral',
                'description' => 'berisi berbagai macam peripheral seperti mouse, keboard dll.',
                'status' => 1,
                'popular' => 1,
                'image' => '1671614271.jpg',
                'created_at' => '2022-12-21 09:17:51',
                'updated_at' => '2022-12-21 09:17:51',
            ),
        ));
        
        
    }
}