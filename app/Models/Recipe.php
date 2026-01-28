<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';

    protected $fillable = [
        'recipe_title',
        'recipe_description',
        'recipe_category',
        'recipe_image',
        'user_id'
    ];
}
