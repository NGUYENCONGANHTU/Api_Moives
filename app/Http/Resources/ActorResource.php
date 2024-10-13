<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class ActorResource extends JsonResource
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
            'full_name' => $this->full_name,
            'movie_id' => $this->movie_id,
            'birth_date' => $this->birth_date,
            'nationality' => $this->nationality,
            'status' => $this->status
        ];
    }
}