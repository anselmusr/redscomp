<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 9,
                'user_id' => '1',
                'fname' => 'Anselmus',
                'lname' => 'Rusdiatmaja',
                'email' => 'anselmusrusdiatmaja@gmail.com',
                'phone' => '085123123123',
                'address1' => 'test2',
                'address2' => 'test',
                'city' => 'Kabupaten Pontianak',
                'state' => 'Kalimantan Barat',
                'country' => 'Indonesia',
                'pincode' => '55711',
                'total_price' => '2100000',
                'ekspedisi' => 'tiki',
                'layanan' => 'ECO-Economy Service-36000',
                'ongkir' => 36000,
                'status' => 0,
                'message' => NULL,
                'tracking_no' => 'reds6917',
                'no_resi' => NULL,
                'b_pembayaran' => NULL,
                'created_at' => '2022-12-19 21:25:36',
                'updated_at' => '2022-12-19 21:48:34',
            ),
            1 => 
            array (
                'id' => 10,
                'user_id' => '1',
                'fname' => 'Anselmus',
                'lname' => 'Rusdiatmaja',
                'email' => 'anselmusrusdiatmaja@gmail.com',
                'phone' => '085123123123',
                'address1' => 'test2',
                'address2' => 'test',
                'city' => 'Kabupaten Bangka Tengah',
                'state' => 'Bangka Belitung',
                'country' => 'Indonesia',
                'pincode' => '55711',
                'total_price' => '2100000',
                'ekspedisi' => 'pos',
                'layanan' => 'REG-Layanan Reguler-51000',
                'ongkir' => 51000,
                'status' => 0,
                'message' => NULL,
                'tracking_no' => 'reds3719',
                'no_resi' => NULL,
                'b_pembayaran' => NULL,
                'created_at' => '2022-12-19 21:56:24',
                'updated_at' => '2022-12-19 21:56:24',
            ),
            2 => 
            array (
                'id' => 11,
                'user_id' => '1',
                'fname' => 'Anselmus',
                'lname' => 'Rusdiatmaja',
                'email' => 'anselmusrusdiatmaja@gmail.com',
                'phone' => '085123123123',
                'address1' => 'test2',
                'address2' => 'test',
                'city' => 'Kabupaten Badung',
                'state' => 'Bali',
                'country' => 'Indonesia',
                'pincode' => '55711',
                'total_price' => '3100000',
                'ekspedisi' => 'pos',
                'layanan' => 'Pos Reguler-Pos Reguler-24000',
                'ongkir' => 24000,
                'status' => 0,
                'message' => NULL,
                'tracking_no' => 'reds2945',
                'no_resi' => NULL,
                'b_pembayaran' => NULL,
                'created_at' => '2022-12-20 15:18:38',
                'updated_at' => '2022-12-20 15:18:38',
            ),
            3 => 
            array (
                'id' => 13,
                'user_id' => '3',
                'fname' => 'user',
                'lname' => 'two',
                'email' => 'user2@gmail.com',
                'phone' => '085105648597',
                'address1' => 'Jl.Affandi',
                'address2' => 'Depan Warung Kelontong',
                'city' => 'Kota Denpasar',
                'state' => 'Bali',
                'country' => 'Indonesia',
                'pincode' => '66781',
                'total_price' => '6200000',
                'ekspedisi' => 'jne',
                'layanan' => 'OKE-Ongkos Kirim Ekonomis-52000',
                'ongkir' => 52000,
                'status' => 1,
                'message' => NULL,
                'tracking_no' => 'reds1867',
                'no_resi' => '12345',
                'b_pembayaran' => '1672877657.jpg',
                'created_at' => '2022-12-22 03:17:09',
                'updated_at' => '2023-01-05 00:25:39',
            ),
            4 => 
            array (
                'id' => 14,
                'user_id' => '3',
                'fname' => 'user',
                'lname' => 'two',
                'email' => 'user2@gmail.com',
                'phone' => '085105648597',
                'address1' => 'Jl.Affandi',
                'address2' => 'Depan Warung Kelontong',
                'city' => 'Kabupaten Badung',
                'state' => 'Bali',
                'country' => 'Indonesia',
                'pincode' => '66781',
                'total_price' => '600000',
                'ekspedisi' => 'pos',
                'layanan' => 'Pos Reguler-Pos Reguler-24000',
                'ongkir' => 24000,
                'status' => 0,
                'message' => NULL,
                'tracking_no' => 'reds2677',
                'no_resi' => NULL,
                'b_pembayaran' => NULL,
                'created_at' => '2023-01-05 00:08:26',
                'updated_at' => '2023-01-05 00:25:29',
            ),
        ));
        
        
    }
}