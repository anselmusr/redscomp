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
                'id' => 1,
                'cate_id' => 2,
                'name' => 'Acer Aspire 3',
                'description' => 'Spek :
Processor Amd A9
Amd Radeon R5
RAM 4gb
Hdd 1TB',
                'original_price' => '3500000',
                'selling_price' => '3100000',
                'image' => '1668530952.jpeg',
                'qty' => 8,
                'weight' => 1000,
                'status' => 1,
                'trending' => 1,
                'created_at' => '2022-11-15 16:49:12',
                'updated_at' => '2022-12-22 03:17:09',
            ),
            1 => 
            array (
                'id' => 2,
                'cate_id' => 2,
                'name' => 'HP 14 - G102AU',
                'description' => 'Spek :
Amd A4-5000 APU with radeon hd graphics
Ram 2gb
hdd 500gb',
                'original_price' => '2500000',
                'selling_price' => '2100000',
                'image' => '1668531352.jpeg',
                'qty' => 9,
                'weight' => 1000,
                'status' => 1,
                'trending' => 1,
                'created_at' => '2022-11-15 16:55:52',
                'updated_at' => '2022-12-19 21:56:24',
            ),
            2 => 
            array (
                'id' => 3,
                'cate_id' => 3,
                'name' => 'PC Core i3',
                'description' => 'Spek :
Intel Core i3
HDD 320GB
SSD 240B
Ram 4GB
Lcd 16inch
mouse, keyboard',
                'original_price' => '3000000',
                'selling_price' => '2500000',
                'image' => '1668531541.jpeg',
                'qty' => 14,
                'weight' => 1000,
                'status' => 1,
                'trending' => 1,
                'created_at' => '2022-11-15 16:59:01',
                'updated_at' => '2022-12-19 20:34:00',
            ),
            3 => 
            array (
                'id' => 4,
                'cate_id' => 1,
                'name' => 'Asus Vivobook Go 14 Flip',
                'description' => 'Spek :
Processor Intel® Pentium® Silver N6000 Processor 1.1 GHz (4M Cache, up to 3.3 GHz, 4 cores)
Intel® UHD Graphics
Ram 8GB DDR4
SSD 512GB',
                'original_price' => '6599000',
                'selling_price' => '6499000',
                'image' => '1668532082.png',
                'qty' => 8,
                'weight' => 1000,
                'status' => 1,
                'trending' => 0,
                'created_at' => '2022-11-15 17:08:02',
                'updated_at' => '2022-11-20 00:32:06',
            ),
            4 => 
            array (
                'id' => 5,
                'cate_id' => 4,
                'name' => 'Keyboard maxfit 61',
                'description' => 'keyboard mechanical dengan switch merah.',
                'original_price' => '1000000',
                'selling_price' => '600000',
                'image' => '1671614489.jpg',
                'qty' => 9,
                'weight' => 1000,
                'status' => 1,
                'trending' => 0,
                'created_at' => '2022-12-21 09:21:29',
                'updated_at' => '2023-01-05 00:08:26',
            ),
            5 => 
            array (
                'id' => 6,
                'cate_id' => 2,
                'name' => 'Asus A407M',
                'description' => 'Spek :
Intel Celeron N4000 1.1Ghz
RAM 4GB
HDD 1TB',
                'original_price' => '3100000',
                'selling_price' => '2900000',
                'image' => '1672879206.jpeg',
                'qty' => 15,
                'weight' => 1000,
                'status' => 1,
                'trending' => 1,
                'created_at' => '2023-01-05 00:40:06',
                'updated_at' => '2023-01-05 00:40:06',
            ),
            6 => 
            array (
                'id' => 7,
                'cate_id' => 2,
                'name' => 'ASUS X200CA',
                'description' => 'Spek :
HDD 160GB
Ram 2gb
webcam ok
baterai normal',
                'original_price' => '2800000',
                'selling_price' => '2500000',
                'image' => '1672879326.jpeg',
                'qty' => 17,
                'weight' => 1000,
                'status' => 1,
                'trending' => 1,
                'created_at' => '2023-01-05 00:42:06',
                'updated_at' => '2023-01-05 00:42:06',
            ),
            7 => 
            array (
                'id' => 8,
                'cate_id' => 2,
                'name' => 'Asus X441U',
                'description' => 'Spek :
Processor Intel Core i3 Gen 6
Ram 4GB
HDD 500GB
webcam ok
lcd ok
keyboard ok',
                'original_price' => '3600000',
                'selling_price' => '3200000',
                'image' => '1672879493.jpeg',
                'qty' => 14,
                'weight' => 1000,
                'status' => 1,
                'trending' => 1,
                'created_at' => '2023-01-05 00:44:53',
                'updated_at' => '2023-01-05 00:44:53',
            ),
            8 => 
            array (
                'id' => 9,
                'cate_id' => 1,
                'name' => 'Lenovo IdeaPad Slim 1 11',
            'description' => 'Display: 11" HD (1366 x 768) TN
Processor: 11.6" HD (1366 x 768), TN, Anti-Silau, Non-Touch, 250 nits, LED Backlight
RAM: 4G/8G
HDD: eMMC: 64GB; M.2 PCIe SSD: 128GB; HDD: 500GB / 1TB
Detail OS: Windows 10 Home
Graphics: Integrated AMD Radeon™
Optical Drive Type: -
Camera: 0.3M with Dual Microphone
Audio: 2 x 1.5W speaker dengan Dolby Audio Certification
Baterai: Integrated 32Wh (pemakaian sampai 8 jam)',
                'original_price' => '3990000',
                'selling_price' => '3649000',
                'image' => '1672881783.jpg',
                'qty' => 6,
                'weight' => 1000,
                'status' => 1,
                'trending' => 0,
                'created_at' => '2023-01-05 01:23:03',
                'updated_at' => '2023-01-05 01:23:03',
            ),
            9 => 
            array (
                'id' => 10,
                'cate_id' => 1,
                'name' => 'Lenovo V145 A9 9425',
                'description' => 'Display: 14 inci, 1366 x 768 piksel, Anti-glare
Processor: AMD APU A9-9425 dual-core 3.1 GHz dengan Turbo Core 3.7 GHz
RAM: 4 GB DDR4 – 2133MMHz, upgradeable max 8 GB
HDD: 1 TB 5400 rpm SATA lll
Detail OS: DOS
Graphics: AMD Radeon R5 Graphics
Optical Drive Type: DVD
Camera: VGA Camera
Audio: 2 x 1.5 W Dolby Audio
Baterai: Baterai 2 Cell 30 Whrs Polymer Battery',
                'original_price' => '3999000',
                'selling_price' => '3499000',
                'image' => '1672881944.jpg',
                'qty' => 7,
                'weight' => 1000,
                'status' => 1,
                'trending' => 0,
                'created_at' => '2023-01-05 01:25:44',
                'updated_at' => '2023-01-05 01:25:44',
            ),
            10 => 
            array (
                'id' => 11,
                'cate_id' => 1,
                'name' => 'ASUS VivoBook E210MA N402',
            'description' => 'Display: LED 11.6" (16:9) LED-backlit HD (1366x768) 60Hz Anti-Glare Panel with 45% NTSC
Processor: Intel® Celeron® N4020
RAM: 4 GB DDR4 2400MHz SDRAM Onboard memory
SSD: 192GB EMMC + SD CARD
Detail OS: Windows 10 Home x64 + Free Microsoft Office Home and Student 2019
Graphics: Intel UHD Graphics 600
Optical Drive Type: -
Camera: VGA Web Camera
Audio: ASUS SonicMaster stereo audio system with surround-sound
Baterai: Baterai 2 Cell 38 Whrs',
                'original_price' => '3799000',
                'selling_price' => '3699000',
                'image' => '1672882015.jpg',
                'qty' => 9,
                'weight' => 1000,
                'status' => 1,
                'trending' => 0,
                'created_at' => '2023-01-05 01:26:55',
                'updated_at' => '2023-01-05 01:26:55',
            ),
            11 => 
            array (
                'id' => 12,
                'cate_id' => 1,
                'name' => 'HP 14 CM0091AU',
                'description' => 'Display: TFT LCD dengan HD BrightView WLED backlight 14 inch, 1.366 x 768 piksel
Processor: AMD APU A4-9125 dual-core 2,3GHz dengan Turbo Core 2,6GHz
RAM: 4 GB DDR4 upgradable
SSD: M.2 128GB
Detail OS: Windows 10 Home
Graphics: AMD Radeon R3 Graphics
Camera: HP TrueVision HD Camera with integrated digital microphone
Audio: Dual Speaker
Battery: 3-Cell, 41 WHr Li-ion prismatic',
                'original_price' => '3999000',
                'selling_price' => '3260000',
                'image' => '1672882119.jpg',
                'qty' => 10,
                'weight' => 1000,
                'status' => 1,
                'trending' => 0,
                'created_at' => '2023-01-05 01:28:39',
                'updated_at' => '2023-01-05 01:28:39',
            ),
            12 => 
            array (
                'id' => 13,
                'cate_id' => 4,
                'name' => 'Logitech G304 Hitam',
                'description' => 'ISI KEMASAN
Gaming Mouse
Receiver Nano LIGHTSPEED USB
Kabel perpanjangan receiver
2 baterai AA
Dokumentasi pengguna

SPESIFIKASI TEKNIS

Penelusuran
Sensor: HERO™
Resolusi: 100 – 12.000 dpi
Zero smoothing/akselerasi/filtering
Maks. akselerasi: > 40 G1
Maks. kecepatan: > 400 IPS1

Ketanggapan
Format data USB: 16 bit/axis
Report rate USB: 1.000 Hz (1md)
Mikroprosesor: 32-bit ARM

Daya Tahan
Tombol (Kiri / Kanan): 10 juta klik
Alas PTFE: jangkauan 250 kilometer1

Spesifikasi fisik
Tinggi: 116,6 mm
Lebar: 62,15 mm
Tebal: 38,2 mm
Berat: 99 g',
                'original_price' => '699000',
                'selling_price' => '479000',
                'image' => '1672882375.png',
                'qty' => 13,
                'weight' => 99,
                'status' => 1,
                'trending' => 0,
                'created_at' => '2023-01-05 01:32:55',
                'updated_at' => '2023-01-05 01:34:37',
            ),
            13 => 
            array (
                'id' => 14,
                'cate_id' => 4,
                'name' => 'Headphone DBE HBT100',
                'description' => 'Spesifikasi :
Headphone Driver : 50mm
Freq Response : 20 - 20 kHz
Impedance : 32 Ohm +- 5%
Cable Length : 1.2m
Jack Plug 3.5mm
Sensitivity 110 dB +- 3 dB

Bluetooth Version 5.0
Kapasitas Baterai 500 mAh
Playing time 30 jam (tergantung volume)',
                'original_price' => '600000',
                'selling_price' => '585000',
                'image' => '1672882687.jpg',
                'qty' => 6,
                'weight' => 99,
                'status' => 1,
                'trending' => 0,
                'created_at' => '2023-01-05 01:38:07',
                'updated_at' => '2023-01-05 01:38:07',
            ),
            14 => 
            array (
                'id' => 15,
                'cate_id' => 4,
                'name' => 'Kanagawa Waves Gaming Mousepad',
                'description' => 'Product Description:
- Material: High Quality PU Leather Premium
- Size: 90 x 40cm
- Tebal: 4mm
- Net Weight: 400g

Fitur:
- Neoprene material, durable and waterproof
- Easy to clean, cukup di lap pakai lap basah. JANGAN direndam atau dry clean.
- Rubber grip di bagian bawah untuk anti-slip
- Stitched edge rapih
- Original design by All-in Gaming Shop

Isi:
- 1 buah PU Mouse Pad',
                'original_price' => '299000',
                'selling_price' => '225000',
                'image' => '1672882841.jpg',
                'qty' => 8,
                'weight' => 400,
                'status' => 1,
                'trending' => 0,
                'created_at' => '2023-01-05 01:40:41',
                'updated_at' => '2023-01-05 01:40:41',
            ),
        ));
        
        
    }
}