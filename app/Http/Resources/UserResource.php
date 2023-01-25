<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name' => $this->name,
            'familyName' => $this->familyName,
            'job_title' => $this->job_title,
            'email' => $this->email,
            'phone' => $this->phone,
            'bio' => $this->bio,
            'language' => $this->language,
            'image' => $this->photoLink(),
            'background_image' => $this->backgroundPhotoLink(),
        ];
    }
}
