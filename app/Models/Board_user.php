<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Board_user extends Model
{
    //
    public function followedByUser(){
        
        return $this->hasMany('App\Models\User');
    }
}
