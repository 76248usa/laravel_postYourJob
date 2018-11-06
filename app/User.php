<?php

namespace App;

use App\Role;
use App\Photo;
use App\Post;
use App\Application;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'role_id', 
        'photo_id', 
        'post_id',
        'application_id'
    ];

   //public function setPasswordAttribute($password){

    // if(!empty($password)){

    //     $this->attributes['password'] = bcrypt($password);
    // }
   //}

   public function isAdmin(){

    if($this->role->name == 'admin'){

        return true;
    }

    return false;

   }

    
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function photo(){
        return $this->hasOne('App\Photo');
    }

    public function posts() {
        return $this->hasMany('App\Post');
    }

    public function application() {
        return $this->belongsTo('App\Application');
    }


}
