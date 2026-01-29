<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('recipes')->insert([
            ['recipe_title'=>'Chicken Tagine with Preserved Lemon','recipe_description'=>'Traditional Moroccan tagine...','recipe_category'=>'Main Dish','recipe_image'=>'https://i.pinimg.com/1200x/14/41/3e/14413e8e307d361b15f67a35c35b3e36.jpg','user_id'=>1],
            ['recipe_title'=>'Couscous with Seven Vegetables','recipe_description'=>'Classic Friday couscous...','recipe_category'=>'Main Dish','recipe_image'=>'https://i.pinimg.com/1200x/88/aa/16/88aa16a81d09426004ab5f23beb10d24.jpg','user_id'=>2],
            ['recipe_title'=>'Harira Soup','recipe_description'=>'Rich tomato-based soup...','recipe_category'=>'Soup','recipe_image'=>'https://i.pinimg.com/1200x/bf/fd/a4/bffda462e2a381d63e145462503cd981.jpg','user_id'=>3],
            ['recipe_title'=>'Zaalouk','recipe_description'=>'Smoky eggplant and tomato salad.','recipe_category'=>'Starter','recipe_image'=>'https://i.pinimg.com/736x/bb/99/c9/bb99c9936872a7a8ba347d3d97002184.jpg','user_id'=>4],
            ['recipe_title'=>'Pastilla with Chicken','recipe_description'=>'Sweet and savory pastry...','recipe_category'=>'Main Dish','recipe_image'=>'https://i.pinimg.com/736x/0e/ba/f9/0ebaf9625c4da5b7a648091cdc336ae9.jpg','user_id'=>5],
            ['recipe_title'=>'Rfissa','recipe_description'=>'Traditional dish with msemen...','recipe_category'=>'Main Dish','recipe_image'=>'https://i.pinimg.com/736x/08/7c/5b/087c5bcbabfb8fcf8bf03c7f1bd90973.jpg','user_id'=>6],
            ['recipe_title'=>'Baghrir','recipe_description'=>'Moroccan thousand-hole pancakes.','recipe_category'=>'Dessert','recipe_image'=>'https://i.pinimg.com/1200x/10/0e/0f/100e0f099575e28945e7992fd5057311.jpg','user_id'=>7],
            ['recipe_title'=>'Chebakia','recipe_description'=>'Sesame cookies coated with honey.','recipe_category'=>'Dessert','recipe_image'=>'https://i.pinimg.com/736x/04/6f/a6/046fa6ce968c1a9234919e019126f99c.jpg','user_id'=>8],
            ['recipe_title'=>'Taktouka','recipe_description'=>'Cooked salad with peppers.','recipe_category'=>'Starter','recipe_image'=>'https://i.pinimg.com/1200x/f8/a6/c1/f8a6c1c1701ca4e5fdd60c1c728f354a.jpg','user_id'=>9],
            ['recipe_title'=>'Msemen','recipe_description'=>'Layered Moroccan flatbread.','recipe_category'=>'Bread','recipe_image'=>'https://i.pinimg.com/736x/aa/f4/6d/aaf46d4bcdcd0cfc8366c39b58121a12.jpg','user_id'=>10],
        ]);
    }
}

