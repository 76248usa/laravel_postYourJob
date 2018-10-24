<?php

namespace App;

use User;
use Category;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'category_id',
        'user_id' 
           
    ];

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

}
