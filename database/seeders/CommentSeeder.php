<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('comments')->insert([
            ['comment_content'=>'Absolutely delicious, just like my grandmother makes!','user_id'=>2,'recipe_id'=>1],
            ['comment_content'=>'Perfect for family lunch.','user_id'=>3,'recipe_id'=>2],
            ['comment_content'=>'Best harira recipe I tried.','user_id'=>5,'recipe_id'=>3],
            ['comment_content'=>'Very flavorful and easy to prepare.','user_id'=>1,'recipe_id'=>4],
            ['comment_content'=>'Amazing balance between sweet and salty.','user_id'=>6,'recipe_id'=>5],
            ['comment_content'=>'Traditional and comforting dish.','user_id'=>4,'recipe_id'=>6],
            ['comment_content'=>'So light and fluffy!','user_id'=>8,'recipe_id'=>7],
            ['comment_content'=>'Perfect with tea.','user_id'=>7,'recipe_id'=>8],
            ['comment_content'=>'Simple and tasty.','user_id'=>10,'recipe_id'=>9],
            ['comment_content'=>'Crispy and soft at the same time.','user_id'=>9,'recipe_id'=>10],
        ]);
    }
}

