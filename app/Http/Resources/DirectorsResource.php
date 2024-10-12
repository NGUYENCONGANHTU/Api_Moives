<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class DirectorsResource extends JsonResource
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
            'birth_date' => $this->birth_date,
            'name' => $this->name,
            'nationality' => $this->nationality,
            'status' => $this->status,
        ];
    }
}