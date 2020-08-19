<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class headline extends Model
{
    public function post(){
        return $this->hasMany(\App\Post::class);
    }
}
