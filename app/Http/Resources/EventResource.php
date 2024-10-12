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
            'id_movie' => $this->id_movie,
            'id_place_theater' => $this->id_place_theater,
            'id_theater' => $this->id_theater,
            'name' => $this->name,
            'descript' => $this->descript,
            'time_event' => $this->time_event,
            'is_sales' => $this->is_sales,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'percent_sales' => $this->percent_sales,
        ];
    }
}