<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['user_id', 'content'];
    
    public function user()
    {
        return $this->belongsto(User::class);
    }
    
    public function favorited_users()
    {
        return $this->belongsToMany(User::class, 'user_favorites', 'micropost_id', 'user_id');
    }
}
