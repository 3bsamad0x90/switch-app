<?php

namespace App;

use App\Business;
use App\Creative;
use App\Music;
use App\SocialMedia;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    protected $fillable = [
        'page_title',
        'url',
        'type_id',
        'user_id',
        'category_name',
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function category($name, $id){
        if($name == 'social'){
            $data = SocialMedia::where('id', $id)->first();
        }elseif($name == 'music'){
            $data = Music::where('id', $id)->first();
        }elseif($name == 'creative'){
            $data = Creative::where('id', $id)->first();
        }elseif($name == 'business'){
            $data = Business::where('id', $id)->first();
        }else{
            $data = 'failed';
        }
        return $data;
    }
}
