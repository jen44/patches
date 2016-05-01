<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    //
     protected $fillable = [
        'name', 'description', 'background',
    ];
    
    
    public function notes(){
        return $this->hasMany('App\Models\Note');
    }
}
