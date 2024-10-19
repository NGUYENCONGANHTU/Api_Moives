<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class MoviesResource extends JsonResource
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
            'name' => $this->name,// tên sự kiện
            'description' => $this->description, // mô tả sự kiện
            'status' => $this->status,// trạng thái sự kiện
            'director_id' => $this->director_id,// trạng thái sự kiện
            'like' => $this->like,//lượt thích
            'release_date' => $this->release_date,// trạng thái sự kiện
            'language' => $this->language,//Ngôn ngữ phim
            'rating' => $this->rating,// Đánh giá phim,
            'age_restriction' => $this->age_restriction,//Độ tuổi trên 13
            'place_id' => $this->place_id,//Địa điểm
            'distributor' => $this->distributor,//phát hành phim
            'trailer' => $this->trailer,//Trailer của phim
        ];
    }
}