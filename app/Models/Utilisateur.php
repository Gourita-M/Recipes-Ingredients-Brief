<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{

    protected $table = 'utilisateur'; 
    protected $primaryKey = 'user_id';

    public $timestamps = false;

    protected $fillable = [
        'username',
        'user_email',
        'user_password',
    ];

    public function comments()
    {
        return $this->hasMany(Comments::class, 'user_id');
    }

    
}
