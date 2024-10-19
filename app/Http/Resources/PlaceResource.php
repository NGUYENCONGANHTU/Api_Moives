<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class PlaceResource extends JsonResource
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
            'name' => $this->name, /// Tên rạp địa điểm
            'description' => $this->description, // Mô tả về  địa điểm
            'status' => $this->status,///Trạng thái của địa điểm 
        ];
    }
}