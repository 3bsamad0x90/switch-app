<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creative extends Model
{
    protected $fillable = ['appName_ar','appName_en','icon'];
    public function photoLink(){
        $icon = asset('AdminAssets/app-assets/images/logo/icon.png');

        if ($this->icon != '') {
            $icon = asset('uploads/apps/creative/'.$this->icon);
        }
        return $icon;
    }
}
