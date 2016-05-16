<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //
    
    protected $fillable = [
        'user_id', 'title', 'content', 'file', 'pos_x', 'pos_y', 'board_id'
    ];
    
    
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    
    public function board(){
        return $this->belongsTo('App\Models\Board');
    }
}
