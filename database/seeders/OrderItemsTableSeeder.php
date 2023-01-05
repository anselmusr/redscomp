<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_items')->delete();
        
        \DB::table('order_items')->insert(array (
            0 => 
            array (
                'id' => 6,
                'order_id' => '9',
                'prod_id' => '2',
                'qty' => '1',
                'price' => '2100000',
                'created_at' => '2022-12-19 21:25:36',
                'updated_at' => '2022-12-19 21:25:36',
            ),
            1 => 
            array (
                'id' => 8,
                'order_id' => '11',
                'prod_id' => '1',
                'qty' => '1',
                'price' => '3100000',
                'created_at' => '2022-12-20 15:18:38',
                'updated_at' => '2022-12-20 15:18:38',
            ),
            2 => 
            array (
                'id' => 9,
                'order_id' => '12',
                'prod_id' => '1',
                'qty' => '2',
                'price' => '3100000',
                'created_at' => '2022-12-21 08:39:31',
                'updated_at' => '2022-12-21 08:39:31',
            ),
            3 => 
            array (
                'id' => 10,
                'order_id' => '13',
                'prod_id' => '1',
                'qty' => '2',
                'price' => '3100000',
                'created_at' => '2022-12-22 03:17:09',
                'updated_at' => '2022-12-22 03:17:09',
            ),
            4 => 
            array (
                'id' => 11,
                'order_id' => '14',
                'prod_id' => '5',
                'qty' => '1',
                'price' => '600000',
                'created_at' => '2023-01-05 00:08:26',
                'updated_at' => '2023-01-05 00:08:26',
            ),
        ));
        
        
    }
}