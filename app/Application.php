<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ApplicationReply;
use App\Post;
use App\Experience;
use App\User;


class Application extends Model
{
    protected $fillable = [
        'experience',
        'skill_1',
        'skill_2',
        'skill_3',
        'skill_1_years',
        'skill_2_years',
        'skill_3_years',
        'certified',
        'name',
        'email',
        'body',
        'post_id',
        'cert_date',
        'cert_number',
        'user_id',
        'photo'
        
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
    public function user(){

        return $this->belongsTo('App\User');
    }
}
