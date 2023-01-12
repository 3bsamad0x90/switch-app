<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
    public function licensePhotoLink()
    {
        $image = asset('AdminAssets/app-assets/images/portrait/small/avatar.png');

        if ($this->licensePhoto != '') {
            $image = asset('uploads/users/'.$this->id.'/'.$this->licensePhoto);
        }

        return $image;
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
    public function addressList()
    {
        return $this->hasMany(UserAddress::class,'user_id');
    }
    public function paymentMethods()
    {
        return $this->hasMany(UserPaymentMethods::class,'user_id');
    }
    public function bookReviews()
    {
        return $this->hasMany(BookReviews::class,'user_id');
    }
    public function favorites()
    {
        return $this->hasMany(UserFavorites::class,'user_id');
    }
    public function apiData($lang,$details = null)
    {
        $data = [
            'id' => $this->id,
            'name' => $this->name,
            'userName' => $this->userName,
            'email' => $this->email,
            'language' => $this->language,
            'phone' => $this->phone,
            'address' => $this->address,
            'about' => $this->about,
            'photo' => $this->photoLink(),
        ];
        if ($details != '') {
            if ($this->publisherBooks()->count() > 0) {
                $books = $this->publisherBooks;
                $data['publisherBooks'] = [];
                foreach ($books as $key => $value) {
                    $data['publisherBooks'][] = $value->apiData($lang);
                }
            }
        }

        return $data;
    }

    public function publisherBooks()
    {
        return $this->hasMany(Books::class,'publisher_id');
    }

    public function checkActive()
    {
        $active = '1';
        if ($this->active == '0') {
            $active = trans('auth.yourAcountStillNotActive');
        }
        if ($this->block == '1') {
            $active = trans('auth.yourAcountIsBlocked');
        }
        return $active;
    }

    public function publisherClients()
    {
        return $this->hasManyThrough(
            'App\User',
            'App\Orders',
            'publisher_id', // Local key on users table...
            'id' // Local key on users table...
        );
    }

    public function sales()
    {
        return $this->hasMany(Orders::class,'publisher_id');
    }
    function mySales()
    {
        return $this->sales->where('status','done');
    }

    public function paymentsHistory()
    {
        return $this->hasMany(PublisherPaymentsHistory::class,'user_id');
    }

    public function currentBalance()
    {
        $sales = $this->mySales()->sum('total');
        $payments = $this->paymentsHistory()->sum('amount');
        return [
            'balance' => $sales-$payments,
            'balanceRate' => (($sales-$payments)/getSettingValue('MinimumForTransfeerMoney'))*100
        ];
    }

    public function myOrders()
    {
        return $this->hasMany(Orders::class,'user_id');
    }

    public function cart()
    {
        return $this->myOrders()->where('status','draft')->where('main_order_id',0)->first();
    }
    public function myCart($lang,$currency = null)
    {
        $myCart = $this->myOrders()->where('status','draft')->where('main_order_id',0)->first();
        if ($myCart != '') {
            foreach ($myCart->items as $key => $value) {
                if ($value->book == '') {
                    $item->delete();
                }
            }
            return $myCart->apiData($lang,$currency);
        } else {
            return '';
        }
    }

}
