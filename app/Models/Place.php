<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', // Tên địa điểm
        'description',// Mô tả về sđịa điểm
        'status',  //Trạng thái của địa điểm (0: không hoạt động, 1: hoạt động)
    ];
}