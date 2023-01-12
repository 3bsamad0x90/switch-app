<?php

namespace App;

use App\Orders;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'productName_ar',
        'productName_en',
        'price',
        'image',
        'purchases'
    ];
    public function photoLink(){
        $image = asset('AdminAssets/app-assets/images/logo/icon.png');

        if ($this->image != '') {
            $image = asset('uploads/products/'.$this->id.'/'.$this->image);
        }
        return $image;
    }

    public function order(){
        return $this->belongsToMany(Orders::class);
    }
}
