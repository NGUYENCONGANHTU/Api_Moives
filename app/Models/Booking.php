<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
         /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'place_id',// ID địa điểm
        'date_booking',// Ngày đặt vé
        'image',// Hình ảnh
        'status',// trạng thái
        'movies_id',// ID phim
        'price',// Giá vé
        'seat',// Số ghế đã đặt
        'user_id',// ID người dùng
    ]; 
}