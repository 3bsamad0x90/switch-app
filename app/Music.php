<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $fillable = ['appName_ar','appName_en','icon'];
    public function photoLink(){
        $icon = asset('AdminAssets/app-assets/images/logo/icon.png');
        if ($this->icon != '') {
            $icon = asset('uploads/apps/music/'.$this->icon);
        }
        return $icon;
    }
}
