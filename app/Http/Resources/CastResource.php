<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class CastResource extends JsonResource
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
            'movie_id' => $this->movie_id,
            'actor_id' => $this->actor_id,
            'role' => $this->role,
            'status' => $this->status,
        ];
    }
}