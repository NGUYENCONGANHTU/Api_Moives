<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class EventResource extends JsonResource
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
            'image' => $this->image,//hình ảnh sự kiện
            'description' => $this->description, // mô tả sự kiện
            'status' => $this->status,// trạng thái sự kiện
        ];
    }
}