<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //
    
    protected $fillable = [
        'title', 'content', 'file', 'position',
    ];
    
    
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    
    public function board(){
        return $this->belongsTo('App\Models\Board');
    }
}
