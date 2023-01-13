<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CreativeResource extends JsonResource
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
            'name' => $this['appName_'.$lang],
            'icon' => asset('public/uploads/apps/creative/'.$this->icon),
        ];
    }
}
