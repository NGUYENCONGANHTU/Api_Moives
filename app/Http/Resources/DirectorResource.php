<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class DirectorResource extends JsonResource
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
            'name' => $this->name,// Tên đạo diễn
            'description' => $this->description,// Mô tả về đạo diễn
            'status' => $this->status, // Trạng thái của đạo diễn
        ];
    }
}