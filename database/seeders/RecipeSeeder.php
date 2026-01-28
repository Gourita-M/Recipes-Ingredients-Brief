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
            ['recipe_title'=>'Chicken Tagine with Preserved Lemon','recipe_description'=>'Traditional Moroccan tagine...','recipe_category'=>'Main Dish','recipe_image'=>'https://example.com/images/tagine_chicken.jpg','user_id'=>1],
            ['recipe_title'=>'Couscous with Seven Vegetables','recipe_description'=>'Classic Friday couscous...','recipe_category'=>'Main Dish','recipe_image'=>'https://example.com/images/couscous.jpg','user_id'=>2],
            ['recipe_title'=>'Harira Soup','recipe_description'=>'Rich tomato-based soup...','recipe_category'=>'Soup','recipe_image'=>'https://example.com/images/harira.jpg','user_id'=>3],
            ['recipe_title'=>'Zaalouk','recipe_description'=>'Smoky eggplant and tomato salad.','recipe_category'=>'Starter','recipe_image'=>'https://example.com/images/zaalouk.jpg','user_id'=>4],
            ['recipe_title'=>'Pastilla with Chicken','recipe_description'=>'Sweet and savory pastry...','recipe_category'=>'Main Dish','recipe_image'=>'https://example.com/images/pastilla.jpg','user_id'=>5],
            ['recipe_title'=>'Rfissa','recipe_description'=>'Traditional dish with msemen...','recipe_category'=>'Main Dish','recipe_image'=>'https://example.com/images/rfissa.jpg','user_id'=>6],
            ['recipe_title'=>'Baghrir','recipe_description'=>'Moroccan thousand-hole pancakes.','recipe_category'=>'Dessert','recipe_image'=>'https://example.com/images/baghrir.jpg','user_id'=>7],
            ['recipe_title'=>'Chebakia','recipe_description'=>'Sesame cookies coated with honey.','recipe_category'=>'Dessert','recipe_image'=>'https://example.com/images/chebakia.jpg','user_id'=>8],
            ['recipe_title'=>'Taktouka','recipe_description'=>'Cooked salad with peppers.','recipe_category'=>'Starter','recipe_image'=>'https://example.com/images/taktouka.jpg','user_id'=>9],
            ['recipe_title'=>'Msemen','recipe_description'=>'Layered Moroccan flatbread.','recipe_category'=>'Bread','recipe_image'=>'https://example.com/images/msemen.jpg','user_id'=>10],
        ]);
    }
}

