<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', // Tên diễn viên
        'description',// Mô tả về diễn viên
        'status',  // Trạng thái của diễn viên
        'movie_id',// ID phim 
    ];
    // public function list_actors()
    // {
    //     return $this->belongsToMany(Movies::class , 'movies', 'movie_id', 'id');
    // }
}