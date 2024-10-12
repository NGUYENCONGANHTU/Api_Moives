<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'id_theater',
        'director_id',
        'actors_id',
        'director',
        'creen',
        'cast',
        'genre',
        'description',
        'release_date',
        'duration',
        'trailer_url',
        'price',
        'sale_price',
        'banner_image',
        'stock_quantity',
        'like',
        'status',
    ];
}