<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UtilisateurSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('utilisateur')->insert([
            ['username'=>'amina cook','user_email'=>'amina@mail.com','user_password'=>'$2y$12$R85Lx1T4GSM4XkJaVePPRu93vDglpSkvfCt6fNA8Q.cWdTlWQTUaG'],
            ['username'=>'youssef food','user_email'=>'youssef@mail.com','user_password'=>'$2y$12$R85Lx1T4GSM4XkJaVePPRu93vDglpSkvfCt6fNA8Q.cWdTlWQTUaG'],
            ['username'=>'fatima kitchen','user_email'=>'fatima@mail.com','user_password'=>'$2y$12$R85Lx1T4GSM4XkJaVePPRu93vDglpSkvfCt6fNA8Q.cWdTlWQTUaG'],
            ['username'=>'karim chef','user_email'=>'karim@mail.com','user_password'=>'$2y$12$R85Lx1T4GSM4XkJaVePPRu93vDglpSkvfCt6fNA8Q.cWdTlWQTUaG'],
            ['username'=>'sara taste','user_email'=>'sara@mail.com','user_password'=>'$2y$12$R85Lx1T4GSM4XkJaVePPRu93vDglpSkvfCt6fNA8Q.cWdTlWQTUaG'],
            ['username'=>'hamza home','user_email'=>'hamza@mail.com','user_password'=>'$2y$12$R85Lx1T4GSM4XkJaVePPRu93vDglpSkvfCt6fNA8Q.cWdTlWQTUaG'],
            ['username'=>'nour flavor','user_email'=>'nour@mail.com','user_password'=>'$2y$12$R85Lx1T4GSM4XkJaVePPRu93vDglpSkvfCt6fNA8Q.cWdTlWQTUaG'],
            ['username'=>'adil foodie','user_email'=>'adil@mail.com','user_password'=>'$2y$12$R85Lx1T4GSM4XkJaVePPRu93vDglpSkvfCt6fNA8Q.cWdTlWQTUaG'],
            ['username'=>'meryem cuisine','user_email'=>'meryem@mail.com','user_password'=>'$2y$12$R85Lx1T4GSM4XkJaVePPRu93vDglpSkvfCt6fNA8Q.cWdTlWQTUaG'],
            ['username'=>'omar spice','user_email'=>'omar@mail.com','user_password'=>'$2y$12$R85Lx1T4GSM4XkJaVePPRu93vDglpSkvfCt6fNA8Q.cWdTlWQTUaG'],
        ]);
    }
}
