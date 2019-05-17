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
}
