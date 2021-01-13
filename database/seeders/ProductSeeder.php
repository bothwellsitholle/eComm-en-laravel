<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name'=>'LG WING 5G',
            'price'=>'350',
            'description'=>'A smart phone with 128gb storage and much more features',
            'category'=>'mobile',
            'gallery'=>'https://www.lg.com/za/images/mobile-phones/md07518099/Gallery/Medium05.jpg'],

            ['name'=>'Oled TV',
            'price'=>'480',
            'description'=>'A smart TV with AI ThinQ and much more features',
            'category'=>'tv',
            'gallery'=>'https://www.lg.com/za/images/tvs/md07515642/Gallery/350-5.jpg'
            ],

            ['name'=>'UHD 4K TV',
            'price'=>'740',
            'description'=>'Giving you a stunning image quality, with vibrant colours and deep blacks, these ultra high definition televisions will enhance every living room.',
            'category'=>'tv',
            'gallery'=>'https://www.lg.com/za/images/plp-b2c/b2c-1/za-8ktvs-categoryselector-3.jpg'
            ],
            
            ['name'=>'Door-In-Door Fridge',
            'price'=>'680',
            'description'=>'The easy access Door-In-Door® compartment lets you conveniently access your favourite snacks and beverages without opening the main door, reducing cold air loss to help keep food fresh for longer.',
            'category'=>'fridge',
            'gallery'=>'https://www.lg.com/za/images/plp-b2c/Doorindoor.JPG'
            ],

            ['name'=>'Side By Side Fridge',
            'price'=>'560',
            'description'=>'With the freezer on the left, the refrigerator on the right, LG side-by-side refrigerators offer innovation and convenience in a sleek and stylish package. Learn about the great features below.',
            'category'=>'fridge',
            'gallery'=>'https://www.lg.com/za/images/plp-b2c/Fridges.JPG'
            ]
        ]);
    }
}
