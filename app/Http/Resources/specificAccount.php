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
        return [
            'name' => $this['appName_'.$lang],
            'icon' => $this->icon,
        ];
    }
}
