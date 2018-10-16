<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;

    public function role() {
        $this->hasOne('App\Role');
    }
}
