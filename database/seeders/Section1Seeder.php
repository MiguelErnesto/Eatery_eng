<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class Section1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('section1s')->truncate();
        DB::table('section1s')->insert([
            [
                'image' => 'slider-image1.jpg',
                'lb_button' => 'Reservation',
                'link_button' => 'footer',
                'small_text' => 'New Restaurant in Town',
                'large_text' =>
                    'Enjoy our special menus every Sunday and Friday',
            ],
            [
                'image' => 'slider-image2.jpg',
                'lb_button' => 'Discover menu',
                'link_button' => 'menu',
                'small_text' => 'Your Perfect Breakfast',
                'large_text' => 'The best dinning quality can be here too!',
            ],
            [
                'image' => 'slider-image3.jpg',
                'lb_button' => 'Meet our chef',
                'link_button' => 'chef',
                'small_text' => 'Eatery Cafe &amp; Restaurant',
                'large_text' =>
                    'Our mission is to provide an unforgettable experience',
            ],
        ]);
    }
}
