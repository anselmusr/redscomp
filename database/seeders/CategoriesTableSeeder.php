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
                'created_at' => '2022-11-15 16:40:58',
                'description' => 'Menyediakan berbagai laptop baru dengan harga terjangkau',
                'id' => 1,
                'image' => '1668530458.jpg',
                'name' => 'Laptop Baru',
                'popular' => 1,
                'status' => 1,
                'updated_at' => '2022-11-15 16:40:58',
            ),
            1 => 
            array (
                'created_at' => '2022-11-15 16:44:12',
                'description' => 'Menyediakan laptop second dengan kondisi yang masih bagus',
                'id' => 2,
                'image' => '1668530652.jpg',
                'name' => 'Laptop Second',
                'popular' => 1,
                'status' => 1,
                'updated_at' => '2022-11-15 16:44:12',
            ),
            2 => 
            array (
                'created_at' => '2022-11-15 16:45:01',
                'description' => 'Menyediakan Komputer second dengan kondisi yang bagus',
                'id' => 3,
                'image' => '1668530701.jpg',
                'name' => 'Komputer Second',
                'popular' => 1,
                'status' => 1,
                'updated_at' => '2022-11-15 16:45:01',
            ),
        ));
        
        
    }
}