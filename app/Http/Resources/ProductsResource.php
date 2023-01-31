<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $lang = $request->header('lang');
        return [
            'id' => $this->id,
            'productName' => $this['productName_'.$lang] != '' ? $this['productName_'.$lang] : $this['productName_en'],
            'price' => $this['price'],
            'description' => 'description for product',
            'image' => asset('public/uploads/products/'.$this->id.'/'.$this->image),
        ];
    }
}
