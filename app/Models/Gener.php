<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gener extends Model
{
    use HasFactory;
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', //tên thương hiệu
        'description', // mô tả thương hiệu 
        'status', //trạng thái thương hiệu
        'movie_id', //mã phim 
        'create_at',
        'update_at',
    ]; 
}