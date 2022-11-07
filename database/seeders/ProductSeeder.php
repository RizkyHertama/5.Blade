<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::query()->insert(
            [
                [
                    "id" => 1,
                    "name" => "Rootbeer",
                    "type" => "drink",
                    "desc" => "Very Refreshing",
                    "price" => 15000,
                    "image_path" => "https://awrestaurants.com/sites/default/files/rootbeer_slider.jpg"
                ],
                [
                    "id" => 2,
                    "name" => "Burger",
                    "type" => "food",
                    "desc" => "Very Tasty Burger",
                    "price" => 47000,
                    "image_path" => "https://awrestaurants.com/sites/default/files/burgers%402x.jpg"
                ],
                [
                    "id" => 3,
                    "name" => "Chicken",
                    "type" => "food",
                    "desc" => "Some Juicy Chicken",
                    "price" => 36000,
                    "image_path" => "https://awrestaurants.com/sites/default/files/hbct_slider.jpg"
                ],
                [
                    "id" => 4,
                    "name" => "Hot Dogs",
                    "type" => "food",
                    "desc" => "Fresh from the oven",
                    "price" => "39999",
                    "image_path" => "https://awrestaurants.com/sites/default/files/hotdog%402x.jpg"
                ],
                [
                    "id" => 5,
                    "name" => "Chicken Nugget",
                    "type" => "food",
                    "desc" => "Quality ingredients",
                    "price" => 18000,
                    "image_path" => "https://awrestaurants.com/sites/default/files/sides%402x.jpg"
                ]
            ]
        );
    }
}
