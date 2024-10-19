<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', // Tên đạo diễn
        'description',// Mô tả về đạo diễn
        'status',  //Trạng thái của đạo diễn (0: không hoạt động, 1: hoạt động)
    ];
}