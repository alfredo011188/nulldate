<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    protected $table = 'directions';
    
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    
}
