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
        'id_movie',
        'id_place_theater',
        'id_theater',
        'name',
        'descript',
        'time_event',
        'is_sales',
        'start_time',
        'end_time',
        'percent_sales',
    ]; 
}