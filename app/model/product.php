<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    public function reviews(){
        return $this->hasMany(review::class);
    }
}
