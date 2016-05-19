<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    //
     protected $fillable = [
        'filename',
    ];
    
    public function board(){
        return $this->belongsTo('App\Models\Background');
    }
}
