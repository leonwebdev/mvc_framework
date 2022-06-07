<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phones')->insert([
            'name' => 'iPhone 8',
            'screen' => 'Retina IPS LCD',
            'battery' => 1821,
            'image' => '1.jpg',
            'description' => "Recently got the iphone 8. Its my first apple device after switching from android. The battery life doesn't last that long but it is to be excepted from a small phone. Camera is Very good if you give it enough light. In low light it's poor...",
        ]);

        DB::table('phones')->insert([
            'name' => 'iPhone 12 Pro Max',
            'screen' => 'Super Retina XDR OLED',
            'battery' => 3687,
            'image' => '2.jpg',
            'description' => "The iPhone 12 Pro Max display has rounded corners that follow a beautiful curved design, and these corners are within a standard rectangle. When measured as a standard rectangular shape, the screen is 6.68 inches diagonally (actual viewable area is less).",
        ]);

        DB::table('phones')->insert([
            'name' => 'Samsung Galaxy S21 Ultra 5G',
            'screen' => 'Dynamic AMOLED 2X',
            'battery' => 5000,
            'image' => '3.jpg',
            'description' => "The 108-megapixel camera captures so much detail, you can pinch in and reveal even more shots within.2 This camera quality expresses rich colour data for true-to-life details and hues — that don't get washed out in the sun.",
        ]);

        DB::table('phones')->insert([
            'name' => 'OnePlus 10 Pro',
            'screen' => 'LTPO2 Fluid AMOLED',
            'battery' => 5000,
            'image' => '4.jpg',
            'description' => "The OnePlus 10 Pro is the latest flagship phone from OnePlus - and while we though it would be the only entry in the 10 line, rumours now say a regular model is still on the way. The 10 Pro's striking design and specs were enough to earn it one of our coveted Best of CES Awards earlier this year, and a Recommended badge in our 4-star OnePlus 10 Pro review.",
        ]);

        DB::table('phones')->insert([
            'name' => 'Sony Xperia Pro',
            'screen' => 'OLED',
            'battery' => 4000,
            'image' => '5.jpg',
            'description' => "The Xperia PRO enables broadcast and photographic professionals to work faster and smarter than ever before. It's the world's first smartphone with dedicated HDMI input, and USB or Ethernet tethering with an Alpha camera. It gives professionals a variety of new possibilities.",
        ]);

        DB::table('phones')->insert([
            'name' => 'Google Pixel 6',
            'screen' => 'AMOLED',
            'battery' => 4614,
            'image' => '6.jpg',
            'description' => "Google launched the Pixel 6 and Pixel 6 Pro on October 19, 2021. For months prior to that date, the company steadily pushed out plenty of official information related to the phones. By the time the launch event came around, we already knew almost everything there was to know.",
        ]);
    }
}