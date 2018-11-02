<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Application;

class Experience extends Model
{
    protected $fillable = [
        
        'years',
    ];

    public function application(){

        $this->belongsTo('App/Application');
    }
}
