<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replies extends Model
{
    protected $guarded=[];
    public function comment(){
        return $this->belongsTo(\App\Comment::class);
    }
}
