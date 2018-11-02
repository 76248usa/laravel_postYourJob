<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ApplicationReply;
use App\Post;
use App\Experience;


class Application extends Model
{
    protected $fillable = [
        'experience',
        'certified',
        'name',
        'email',
        'body',
        'post_id',
        'cert_date',
        'cert_number'
        
    ];

    public function reply(){

        return $this->hasMany('App\ApplicationReply');

    }

    public function post(){

        return $this->belongsTo('App\Post');
    }

    public function experience(){

        return $this->belongsTo('App\Experience');
    }
}
