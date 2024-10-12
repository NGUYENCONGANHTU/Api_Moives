<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class BookingHistoryResource extends JsonResource
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
            'status' => $this->status,
            'change_date' => $this->change_date,
            'description' => $this->description,
        ];
    }
}