<?php

namespace App\Http\Resources\Admins\News;

use Illuminate\Http\Resources\Json\JsonResource;
class NewsResource extends JsonResource
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
            'images' => $this->images,
            'description' => $this->description,
            'admin_id' => $this->admin_id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}