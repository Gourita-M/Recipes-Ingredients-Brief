<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    
    protected $table = 'ingredients';

    protected $primaryKey = 'ingredient_id';
    public $timestamps = false;
    
    protected $fillable = [
        'ingredient_name',
        'quantity',
        'recipe_id'
    ];
}
