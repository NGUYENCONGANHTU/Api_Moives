<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class GenerResource extends JsonResource
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
            'name' => $this->name,// tên sự kiện
            'description' => $this->description, // mô tả sự kiện
            'status' => $this->status,// trạng thái sự kiện
            'movie_id' => $this->movie_id,// mã phim
            'status' => $this->status,// trạng thái sự kiện
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
        ];
    }
}