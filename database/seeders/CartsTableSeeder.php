<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('carts')->delete();
        
        \DB::table('carts')->insert(array (
            0 => 
            array (
                'created_at' => '2022-12-03 00:53:05',
                'id' => 12,
                'prod_id' => '2',
                'prod_qty' => 1,
                'updated_at' => '2022-12-03 00:53:05',
                'user_id' => '1',
            ),
            1 => 
            array (
                'created_at' => '2022-12-03 02:01:01',
                'id' => 13,
                'prod_id' => '2',
                'prod_qty' => 1,
                'updated_at' => '2022-12-03 02:01:01',
                'user_id' => '3',
            ),
        ));
        
        
    }
}