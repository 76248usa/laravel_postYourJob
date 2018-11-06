<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $fillable = 
    [
        'file', 
        'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    
}
