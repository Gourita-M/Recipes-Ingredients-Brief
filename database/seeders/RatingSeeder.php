<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ratings')->insert([
            ['rating_value'=>5,'user_id'=>2,'recipe_id'=>1],
            ['rating_value'=>4,'user_id'=>3,'recipe_id'=>2],
            ['rating_value'=>5,'user_id'=>5,'recipe_id'=>3],
            ['rating_value'=>4,'user_id'=>1,'recipe_id'=>4],
            ['rating_value'=>5,'user_id'=>6,'recipe_id'=>5],
            ['rating_value'=>4,'user_id'=>4,'recipe_id'=>6],
            ['rating_value'=>5,'user_id'=>8,'recipe_id'=>7],
            ['rating_value'=>5,'user_id'=>7,'recipe_id'=>8],
            ['rating_value'=>4,'user_id'=>10,'recipe_id'=>9],
            ['rating_value'=>5,'user_id'=>9,'recipe_id'=>10],
        ]);
    }
}

