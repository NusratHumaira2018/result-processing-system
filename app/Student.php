<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function user()
    {
        return $this->morphOne('App\User', 'userable');
    }
    public function marks()
    {
        return $this->hasMany('App\Mark');
    }
}