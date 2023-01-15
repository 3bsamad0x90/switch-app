<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class specificAccount extends JsonResource
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
        $category_name = $request->header('category_name');
        return [
            'name' => $this['appName_'.$lang],
            'icon' => asset('uploads/apps/'.$category_name.'/'.$this->icon)
        ];
    }
}
