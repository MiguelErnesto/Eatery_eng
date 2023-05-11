<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class Section4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('section4s')->truncate();
        DB::table('section4s')->insert([
            'title' => 'Our Menus',
            'description' => 'TEA TIME & DINING',
            'bg_testimonials_image' => 'testimonial-bg.jpg',
        ]);

        DB::table('section4_images')->truncate();
        DB::table('section4_images')->insert([
            [
                'image' => 'menu-image1.jpg',
                'title' => 'American Breakfast',
                'description' => 'Tomato / Eggs / Sausage',
                'text_popup' => 'American Breakfast',
                'price' => '25',
            ],
            [
                'image' => 'menu-image2.jpg',
                'title' => 'Self-made Salad',
                'description' => 'Green / Fruits / Healthy',
                'text_popup' => 'Self-made Salad',
                'price' => '18',
            ],
            [
                'image' => 'menu-image3.jpg',
                'title' => 'Chinese Noodle',
                'description' => 'Pepper / Chicken / Vegetables',
                'text_popup' => 'Chinese Noodle',
                'price' => '34',
            ],
            [
                'image' => 'menu-image4.jpg',
                'title' => 'Rice Soup',
                'description' => 'Green / Chicken',
                'text_popup' => 'Rice Soup',
                'price' => '28',
            ],
            [
                'image' => 'menu-image5.jpg',
                'title' => 'Deli Burger',
                'description' => 'description',
                'text_popup' => 'Beef / Fried Potatoes',
                'price' => '46',
            ],
            [
                'image' => 'menu-image6.jpg',
                'title' => 'Big Flat Fried',
                'description' => 'Pepper / Crispy',
                'text_popup' => 'Big Flat Fried',
                'price' => '38',
            ],
        ]);

        DB::table('section4_testimonials')->truncate();
        DB::table('section4_testimonials')->insert([
            [
                'testimonial_text' => 'Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus
                mollis interdum ullamcorper nulla non.',
                'name' => 'Digital Carlson',
                'name_description' => 'Pharetra quam sit amet',
            ],
            [
                'testimonial_text' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                egestas. Sed vestibulum orci quam.',
                'name' => 'Johnny Stephen',
                'name_description' => 'Magna nisi porta ligula',
            ],
            [
                'testimonial_text' => 'Vivamus aliquet felis eu diam ultricies congue. Morbi porta lorem nec consectetur porta
                quis dui elit habitant morbi.',
                'name' => 'Jessie White',
                'name_description' => 'Vitae lacinia augue urna quis',
            ],
        ]);
    }
}
