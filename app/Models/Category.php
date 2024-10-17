<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'categories';
    protected $fillable = [
        'id',
        'name',
        'id_movies',
        'description',
        'create_at',
        'update_at'
    ];

    public function list_categories()
    {
        return $this->belongsToMany(Movie::class , 'movies', 'id_movies', 'id');
    }
}