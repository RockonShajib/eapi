<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $fillable = [
        'name',
        'detail',
        'price',
        'stock',
        'discount'
    ];
    public function reviews(){
        return $this->hasMany(review::class);
    }
}
