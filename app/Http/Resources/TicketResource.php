<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class TicketResource extends JsonResource
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
            'booking_id' => $this->booking_id,
            'user_id' => $this->user_id,
            'movie_id' => $this->movie_id,
            'seat_number' => $this->seat_number,
            'city' => $this->city,
            'status' => $this->status,
            'price' => $this->price,
            'discount' => $this->discount,
           
        ];
    }
}