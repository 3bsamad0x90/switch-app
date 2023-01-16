<?php

namespace App\Http\Resources;

use App\Http\Resources\ProductsResource;
use Illuminate\Http\Resources\Json\JsonResource;

class orderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user->name,
            'product_id' => ProductsResource::collection($this->products),
            'status' => $this->status,
        ];
    }
}
