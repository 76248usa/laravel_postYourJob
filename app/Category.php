<?php

namespace App;
use Post;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function post(){

        $this->belongsTo('App\Post');

    }
}

