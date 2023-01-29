<?php

namespace App\Http\Resources;

use App\Http\Resources\specificAccount;
use Illuminate\Http\Resources\Json\JsonResource;

class showAccountResource extends JsonResource
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
            'page_title' => $this->page_title,
            'url' => $this->url,
            'User name' => $this->user()->first()->name . ' ' . $this->user()->first()->familyName,
            'category_name' => $this->category_name,
            'status' => $this->status,
            'account' => new specificAccount($this->category($this->category_name, $this->type_id),$this->category_name)
        ];
    }
}
