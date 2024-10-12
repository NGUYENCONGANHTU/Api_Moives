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
            'user_id' => $this->user_id,
            'movie_id' => $this->movie_id,
            'booking_date' => $this->booking_date,
            'id_theater' => $this->id_theater,
            'id_event' => $this->id_event,
            'id_place_theater' => $this->id_place_theater,
            'status' => $this->status,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'discount' => $this->discount,
            'seat_selection' => $this->seat_selection,
            'total_amount' => $this->total_amount,
            'city' => $this->city,
            'theater' => $this->theater,
            'show_time' => $this->show_time,
            'payment_method' => $this->payment_method,
            'status' => $this->status,
        ];
    }
}