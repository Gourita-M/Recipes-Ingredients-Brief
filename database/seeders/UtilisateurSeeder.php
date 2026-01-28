<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UtilisateurSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('utilisateur')->insert([
            ['username'=>'amina_cook','user_email'=>'amina@mail.com','user_password'=>'hashed_pwd_1'],
            ['username'=>'youssef_food','user_email'=>'youssef@mail.com','user_password'=>'hashed_pwd_2'],
            ['username'=>'fatima_kitchen','user_email'=>'fatima@mail.com','user_password'=>'hashed_pwd_3'],
            ['username'=>'karim_chef','user_email'=>'karim@mail.com','user_password'=>'hashed_pwd_4'],
            ['username'=>'sara_taste','user_email'=>'sara@mail.com','user_password'=>'hashed_pwd_5'],
            ['username'=>'hamza_home','user_email'=>'hamza@mail.com','user_password'=>'hashed_pwd_6'],
            ['username'=>'nour_flavor','user_email'=>'nour@mail.com','user_password'=>'hashed_pwd_7'],
            ['username'=>'adil_foodie','user_email'=>'adil@mail.com','user_password'=>'hashed_pwd_8'],
            ['username'=>'meryem_cuisine','user_email'=>'meryem@mail.com','user_password'=>'hashed_pwd_9'],
            ['username'=>'omar_spice','user_email'=>'omar@mail.com','user_password'=>'hashed_pwd_10'],
        ]);
    }
}
