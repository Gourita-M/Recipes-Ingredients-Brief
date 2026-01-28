<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ingredients')->insert([
            ['ingredient_name'=>'Chicken','quantity'=>'1 whole','recipe_id'=>1],
            ['ingredient_name'=>'Preserved lemon','quantity'=>'1','recipe_id'=>1],
            ['ingredient_name'=>'Green olives','quantity'=>'100g','recipe_id'=>1],
            ['ingredient_name'=>'Couscous semolina','quantity'=>'500g','recipe_id'=>2],
            ['ingredient_name'=>'Carrots','quantity'=>'2','recipe_id'=>2],
            ['ingredient_name'=>'Zucchini','quantity'=>'2','recipe_id'=>2],
            ['ingredient_name'=>'Tomatoes','quantity'=>'4','recipe_id'=>3],
            ['ingredient_name'=>'Lentils','quantity'=>'150g','recipe_id'=>3],
            ['ingredient_name'=>'Chickpeas','quantity'=>'100g','recipe_id'=>3],
            ['ingredient_name'=>'Eggplant','quantity'=>'2','recipe_id'=>4],
            ['ingredient_name'=>'Tomatoes','quantity'=>'3','recipe_id'=>4],
            ['ingredient_name'=>'Chicken','quantity'=>'500g','recipe_id'=>5],
            ['ingredient_name'=>'Almonds','quantity'=>'200g','recipe_id'=>5],
            ['ingredient_name'=>'Msemen','quantity'=>'3 pieces','recipe_id'=>6],
            ['ingredient_name'=>'Lentils','quantity'=>'150g','recipe_id'=>6],
            ['ingredient_name'=>'Semolina','quantity'=>'250g','recipe_id'=>7],
            ['ingredient_name'=>'Yeast','quantity'=>'1 tsp','recipe_id'=>7],
            ['ingredient_name'=>'Flour','quantity'=>'500g','recipe_id'=>8],
            ['ingredient_name'=>'Sesame seeds','quantity'=>'100g','recipe_id'=>8],
            ['ingredient_name'=>'Green peppers','quantity'=>'3','recipe_id'=>9],
            ['ingredient_name'=>'Garlic','quantity'=>'2 cloves','recipe_id'=>9],
            ['ingredient_name'=>'Flour','quantity'=>'400g','recipe_id'=>10],
            ['ingredient_name'=>'Butter','quantity'=>'50g','recipe_id'=>10],
        ]);
    }
}

