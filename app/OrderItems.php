<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    //
    protected $guarded = [];

    public function book()
    {
        return $this->belongsTo(Books::class,'book_id');
    }
    public function publisher()
    {
        return $this->belongsTo(User::class,'publisher_id');
    }

    public function typeText()
    {
        $text = trans('common.'.$this->book_type);
        return $text;
    }
    public function apiData($lang,$currency = null)
    {
        if ($currency == '') {
            $totals = [
                'total' => $this->total,
                'price' => $this->price
            ];
        } else {
            $curruncy = Currencies::find($currency);
            if ($curruncy != '') {
                $totals = [
                    'total' => round($this->total/$curruncy->transfer_rate),
                    'price' => round($this->price/$curruncy->transfer_rate)
                ];
            } else {
                $totals = [
                    'total' => $this->total,
                    'price' => $this->price
                ];
            }
        }

        $data = [
            'id' => $this->id,
            'publisher' => $this->publisher->apiData($lang) ?? [],
            'book' => $this->book != '' ? $this->book->apiData($lang) : [],
            'type' => trans('common.'.$this->book_type),
            'price' => $totals['price'],
            'quantity' => $this->quantity,
            'total' => $totals['total'],

            'totalPrice' => $totals['total'],
            'quntity' => $this->quantity,
            'book_type' => $this->book_type
        ];
        return $data;
    }
    public function subOrder()
    {
        return $this->belongsTo(Orders::class,'order_id');
    }

}
