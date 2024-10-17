<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'actor';
    protected $fillable = [
        'full_name',
        'movie_id',
        'nationality',
        'bio',
        'status',
    ];
    public function list_actors()
    {
        return $this->belongsToMany(Movie::class , 'movies', 'movie_id', 'id');
    }
}