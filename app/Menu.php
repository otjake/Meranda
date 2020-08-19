<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function Post(){
        return $this->hasMany(\App\Post::class);
    }
}
