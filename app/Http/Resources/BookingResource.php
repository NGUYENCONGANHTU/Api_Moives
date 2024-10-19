<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class BookingResource extends JsonResource
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
            'place_id' => $this->place_id, // ID địa điểm
            'date_booking' => $this->date_booking,// Ngày đặt vé
            'image' => $this->image,// Hình ảnh
            'status' => $this->status,// trạng thái
            'movies_id' => $this->movies_id,// ID phim
            'price' => $this->price,// Giá vé
            'seat' => $this->seat,// Số ghế đã đặt
            'user_id' => $this->user_id,// ID người dùng
        ];
    }
}