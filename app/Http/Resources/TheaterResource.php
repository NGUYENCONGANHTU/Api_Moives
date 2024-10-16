<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Repositories\PlaceThreateRepository;
class TheaterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $placeThreateRepository = new PlaceThreateRepository();
        return [
            'id' => $this->id,
            'id_place_theater' => $this->id_place_theater,
            'place_theater_name' => $placeThreateRepository->findOrFail($this->id_place_theater)->name, 
            'name' => $this->name,
            'descript' => $this->descript,
            'calendar' => $this->calendar,
            'img' => $this->img,
            'map' => $this->map,
            'phone' => $this->phone,
            'price_ticket' => $this->price_ticket,
            'hotline' => $this->hotline,
        ];
    }
}