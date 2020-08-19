<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $guarded=[];


    public function Menu(){
        return $this->belongsTo(\App\Menu::class);
    }
    public function headline(){
        return $this->belongsTo(\App\headline::class);
    }
    public function comments(){
        return $this->hasMany(\App\Comment::class);
    }

    public function reply(){
        return $this->hasMany(\App\Replies::class);
    }
}
