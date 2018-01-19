<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    
    public function direction(){
        return $this->hasMany('App\Models\Direction', 'user_id');
    }

}
