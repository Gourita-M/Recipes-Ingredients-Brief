<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';

    protected $primaryKey = 'comment_id';
    public $timestamps = false;
    
    protected $fillable = [
        'comment_content',
        'user_id',
        'recipe_id'

    ];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'user_id');
    }
}