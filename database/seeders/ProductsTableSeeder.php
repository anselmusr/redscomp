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

        \DB::table('products')->insert(
            array(
                0 =>
                array(
                    'cate_id' => 2,
                    'created_at' => '2022-11-15 16:49:12',
                    'description' => 'Spek :
Processor Amd A9
Amd Radeon R5
RAM 4gb
Hdd 1TB',
                    'id' => 1,
                    'image' => '1668530952.jpeg',
                    'meta_description' => 'laptop-acer-second',
                    'meta_keywords' => 'laptop-acer-second',
                    'meta_title' => 'laptop-acer-second',
                    'name' => 'Acer Aspire 3',
                    'original_price' => '3500000',
                    'qty' => 15,
                    'selling_price' => '3100000',
                    'slug' => 'Acer Aspire 3',
                    'small_description' => 'Acer Aspire 3 second kondisi masih bagus',
                    'status' => 1,
                    'tax' => '0',
                    'trending' => 1,
                    'updated_at' => '2022-11-15 17:15:11',
                    'weight' => 1000,
                ),
                1 =>
                array(
                    'cate_id' => 2,
                    'created_at' => '2022-11-15 16:55:52',
                    'description' => 'Spek :
Amd A4-5000 APU with radeon hd graphics
Ram 2gb
hdd 500gb',
                    'id' => 2,
                    'image' => '1668531352.jpeg',
                    'meta_description' => 'laptop-hp-second',
                    'meta_keywords' => 'laptop-hp-second',
                    'meta_title' => 'laptop-hp-second',
                    'name' => 'HP 14 - G102AU',
                    'original_price' => '2500000',
                    'qty' => 15,
                    'selling_price' => '2100000',
                    'slug' => 'Laptop HP',
                    'small_description' => 'Laptop Second Hp Kondisi Mulus',
                    'status' => 1,
                    'tax' => '0',
                    'trending' => 1,
                    'updated_at' => '2022-11-15 17:15:11',
                    'weight' => 1000,
                ),
                2 =>
                array(
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
                    'meta_description' => 'komputer-second',
                    'meta_keywords' => 'komputer-second',
                    'meta_title' => 'komputer-second',
                    'name' => 'PC Core i3',
                    'original_price' => '3000000',
                    'qty' => 15,
                    'selling_price' => '2500000',
                    'slug' => 'PC Core i3',
                    'small_description' => 'PC Office dengan procie intel core i3',
                    'status' => 1,
                    'tax' => '0',
                    'trending' => 1,
                    'updated_at' => '2022-11-15 17:13:05',
                    'weight' => 1000,
                ),
                3 =>
                array(
                    'cate_id' => 1,
                    'created_at' => '2022-11-15 17:08:02',
                    'description' => 'Spek :
Processor Intel® Pentium® Silver N6000 Processor 1.1 GHz (4M Cache, up to 3.3 GHz, 4 cores)
Intel® UHD Graphics
Ram 8GB DDR4
SSD 512GB',
                    'id' => 4,
                    'image' => '1668532082.png',
                    'meta_description' => 'laptop-asus-baru',
                    'meta_keywords' => 'laptop-asus-baru',
                    'meta_title' => 'laptop-asus-baru',
                    'name' => 'Asus Vivobook Go 14 Flip',
                    'original_price' => '6599000',
                    'qty' => 10,
                    'selling_price' => '6499000',
                    'slug' => 'Laptop Asus',
                    'small_description' => 'Laptop Asus Baru untuk pelajar',
                    'status' => 1,
                    'tax' => '0',
                    'trending' => 1,
                    'updated_at' => '2022-11-15 17:08:02',
                    'weight' => 1000,
                ),
            )
        );


    }
}
