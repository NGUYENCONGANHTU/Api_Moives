<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    use HasFactory;
         /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image',// Hình ảnh
        'name',// Tên thương hiệu
        'movies_id', // ID phim
        'status',// trạng thái thương hiệu
    ]; 
}