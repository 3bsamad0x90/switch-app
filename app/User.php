<?php

namespace App;

use App\Accounts;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hisRole()
    {
        return $this->belongsTo(roles::class,'role');
    }
    public function photoLink()
    {
        $image = asset('AdminAssets/app-assets/images/portrait/small/avatar.png');

        if ($this->image != '') {
            $image = asset('uploads/users/'.$this->id.'/'.$this->image);
        }

        return $image;
    }
    public function backgroundPhotoLink()
    {
        // $image = asset('AdminAssets/app-assets/images/portrait/small/avatar.png');

        if ($this->background_image != '') {
            $image = asset('uploads/users/'.$this->id.'/'.$this->background_image);
            return $image;
        }

    }
    public function countryData()
    {
        $country = 'ae';
        if ($this->country != null) {
            $country = $this->country;
        }
        if (getCountryByIso($country)['name'] != '') {
            $name = getCountryByIso($country)['name'];
        }else {
            $name = '';
        }

        return [
            'id' => $this->country ?? 'ae',
            'country_code' => $this->country ?? 'ae',
            'name' => $name,
        ];
        return $this->belongsTo(Countries::class,'country','iso');
    }
    public function governorateData()
    {
        return $this->belongsTo(Governorates::class,'governorate');
    }
    public function cityData()
    {
        return [
            'id' => $this->city,
            'name' => $this->city,
        ];
        return $this->belongsTo(Cities::class,'city');
    }
    public function favorites()
    {
        return $this->hasMany(UserFavorites::class,'user_id');
    }
    public function apiData($lang)
    {
        $data = [
            'id' => $this->id,
            'name' => $this->name,
            'familyName' => $this->familyName,
            'email' => $this->email,
            'language' => $this->language,
            'phone' => $this->phone,
            'job_title' => $this->job_title,
            'bio' => $this->bio,
            'image' => $this->photoLink(),
            'background_image' => $this->backgroundPhotoLink(),
        ];
        return $data;
    }

    public function accounts()
    {
        return $this->hasMany(Accounts::class,'user_id');
    }
    
    public function myOrders()
    {
        return $this->hasMany(Orders::class,'user_id');
    }

    public function cart()
    {
        return $this->myOrders()->where('status','draft')->where('main_order_id',0)->first();
    }

}
