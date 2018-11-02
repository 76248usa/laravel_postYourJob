<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Application;

class ApplicationReply extends Model
{
    protected $fillable = [
        'title',
        'reply',
        'author',
        'email',
        'application_id'

    ];

    public function application(){

        $this->belongsTo('App\Application');


    }
}
