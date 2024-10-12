<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class NewsResource extends JsonResource
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
            'content' => $this->content,
            'author_id' => $this->author_id,
            'publish_date' => $this->publish_date,
            'status' => $this->status,
        ];
    }
}