<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MusicResource extends JsonResource
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
            'icon' => asset('public/uploads/apps/music/'.$this->icon),
        ];
    }
}
