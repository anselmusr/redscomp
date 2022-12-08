<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'cate_id' => 2,
                'created_at' => '2022-11-15 16:49:12',
                'description' => 'Spek :
Processor Amd A9
Amd Radeon R5
RAM 4gb
Hdd 1TB',
                'id' => 1,
                'image' => '1668530952.jpeg',
                'name' => 'Acer Aspire 3',
                'original_price' => '3500000',
                'qty' => 14,
                'selling_price' => '3100000',
                'status' => 1,
                'trending' => 1,
                'updated_at' => '2022-11-20 00:32:06',
                'weight' => 1000,
            ),
            1 => 
            array (
                'cate_id' => 2,
                'created_at' => '2022-11-15 16:55:52',
                'description' => 'Spek :
Amd A4-5000 APU with radeon hd graphics
Ram 2gb
hdd 500gb',
                'id' => 2,
                'image' => '1668531352.jpeg',
                'name' => 'HP 14 - G102AU',
                'original_price' => '2500000',
                'qty' => 14,
                'selling_price' => '2100000',
                'status' => 1,
                'trending' => 1,
                'updated_at' => '2022-11-29 01:54:38',
                'weight' => 1000,
            ),
            2 => 
            array (
                'cate_id' => 3,
                'created_at' => '2022-11-15 16:59:01',
                'description' => 'Spek :
Intel Core i3
HDD 320GB
SSD 240B
Ram 4GB
Lcd 16inch
mouse, keyboard',
                'id' => 3,
                'image' => '1668531541.jpeg',
                'name' => 'PC Core i3',
                'original_price' => '3000000',
                'qty' => 15,
                'selling_price' => '2500000',
                'status' => 1,
                'trending' => 1,
                'updated_at' => '2022-11-15 17:13:05',
                'weight' => 1000,
            ),
            3 => 
            array (
                'cate_id' => 1,
                'created_at' => '2022-11-15 17:08:02',
                'description' => 'Spek :
Processor Intel® Pentium® Silver N6000 Processor 1.1 GHz (4M Cache, up to 3.3 GHz, 4 cores)
Intel® UHD Graphics
Ram 8GB DDR4
SSD 512GB',
                'id' => 4,
                'image' => '1668532082.png',
                'name' => 'Asus Vivobook Go 14 Flip',
                'original_price' => '6599000',
                'qty' => 8,
                'selling_price' => '6499000',
                'status' => 1,
                'trending' => 1,
                'updated_at' => '2022-11-20 00:32:06',
                'weight' => 1000,
            ),
        ));
        
        
    }
}