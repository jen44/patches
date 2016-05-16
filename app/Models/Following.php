<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Following extends Model
{
    //
    public function following(){
        return $this->hasMany('App\Models\User');
        
    }
}
