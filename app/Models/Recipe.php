<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';
    protected $primaryKey = 'recipe_id';

    public function comments()
    {
        return $this->hasMany(Comments::class, 'recipe_id');
    }

    protected $fillable = [
        'recipe_title',
        'recipe_description',
        'recipe_category',
        'recipe_image',
        'user_id'
    ];

    
}
