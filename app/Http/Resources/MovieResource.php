<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class MovieResource extends JsonResource
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
            'title' => $this->title,
            'id_theater' => $this->id_theater,
            'director_id' => $this->director_id,
            'actors_id' => $this->actors_id,
            'director' => $this->director,
            'creen' => $this->creen,
            'cast' => $this->cast,
            'genre' => $this->genre,
            'description' => $this->description,
            'release_date' => $this->release_date,
            'duration' => $this->duration,
            'trailer_url' => $this->trailer_url,
            'price' => $this->price,
            'sale_price' => $this->sale_price,
            'banner_image' => $this->banner_image,
            'stock_quantity' => $this->stock_quantity,
            'like' => $this->like,
            'status' => $this->status,
        ];
    }
}