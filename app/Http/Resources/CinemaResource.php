<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class CinemaResource extends JsonResource
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
            'name' => $this->name, // Tên rạp chiếu phim
            'description' => $this->description,// Mô tả về rạp chiếu phim
            'status' => $this->status,//Trạng thái của rạp chiếu phim
            'hotline' => $this->hotline,// số hotline rạp chiếu phim 
            'address' => $this->address, // địa chỉ 
            'url_map' => $this->url_map,//bản đồ rạp chiếu phim 
            'cinema_id' => $this->cinema_id,//mã của rạp chiếu phim 
        ];
    }
}