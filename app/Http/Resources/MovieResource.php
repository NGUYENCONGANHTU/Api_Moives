<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Repositories\DirectorsRepository;
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
        $directorsRepository = new DirectorsRepository();
        return [
            'id' => $this->id,
            'title' => $this->title,
            'director_id' => $this->director_id,
            'director_name' => $directorsRepository->findOrFail($this->director_id)->full_name, 
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