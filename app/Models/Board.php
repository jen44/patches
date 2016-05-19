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
    
    public function user(){
        
        return $this->belongsTo('App\Models\User');
        
    }
    
    public function follower(){
        
        return $this->belongsToMany('');
        
    }
    
    public function backgrounds(){
        return $this->hasMany('App\Models\Background');
    }
}
