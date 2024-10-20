<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', // tên sự kiện
        'image',//hình ảnh sự kiện
        'description', // mô tả sự kiện
        'status',// trạng thái sự kiện
    ]; 
}