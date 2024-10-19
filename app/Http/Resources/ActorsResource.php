<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class ActorsResource extends JsonResource
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
            'name' => $this->name,// Tên diễn viên
            'description' => $this->description,// Mô tả về diễn viên
            'status' => $this->status, // Trạng thái của diễn viên
            'movie_id' => $this->movie_id, // ID phim 
        ];
    }
}