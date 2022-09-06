<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'name' => "Ralph",
                'gender' => "Male",
                'type' => "Persian",
                'colour' => "Black & White",
                'food' => "Whiskas",
            ],
            [
                'name' => "Genie",
                'gender' => "Female",
                'type' => "Sphynx",
                'colour' => "Chocolate",
                'food' => "Proplan",
            ],
            [
                'name' => "Narto",
                'gender' => "Male",
                'type' => "Persian",
                'colour' => "White",
                'food' => "Royal Canin",
            ],
            [
                'name' => "Geni",
                'gender' => "Female",
                'type' => "Angora",
                'colour' => "Black",
                'food' => "Whiskas",
            ],
            [
                'name' => "Dodo",
                'gender' => "Male",
                'type' => "Mainecoon",
                'colour' => "Grey",
                'food' => "Royal Canin",
            ],
        ];

        \DB::table('cats')->insert($posts);
    }
}
