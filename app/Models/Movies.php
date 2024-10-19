<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', // Tên phim
        'director_id',// Mã đạo diễn  
        'status',  // Trạng thái phim 
        'release_date',// Ngày khởi chiếu phim
        'language',// Ngôn ngữ phim
        'like', // Số lượt thích
        'description',// Mô tả phim,
        'rating',// Đánh giá phim,
        'age_restriction',// Độ tuổi trên 13
        'place_id', // Địa điểm
        'distributor',//phát hành phim
        'trailer', // Trailer của phim
    ];
}