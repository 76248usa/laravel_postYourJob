<?php

namespace App;

use App\User;
use App\Employee;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'user_id'];

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function employees(){
        return $this->hasMany('App\Employee');
    }
}
