<?php

namespace App;

use App\Products;
use App\User;
use Illuminate\Database\Eloquent\Model;


class Orders extends Model
{
    public function products(){
        return $this->belongsToMany(Products::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
