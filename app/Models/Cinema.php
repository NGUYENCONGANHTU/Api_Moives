<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', // Tên rạp chiếu phim
        'description',// Mô tả về rạp chiếu phim
        'status',  //Trạng thái của rạp chiếu phim (0: không hoạt động, 1: hoạt động)
        'hotline',  // số hotline rạp chiếu phim 
        'address',  // địa chỉ
        'url_map', //bản đồ rạp chiếu phim 
        'cinema_id',  //mã của rạp chiếu phim 
    ];
}