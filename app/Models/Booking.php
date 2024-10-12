<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
         /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'movie_id',
        'booking_date',
        'id_theater',
        'id_event',
        'id_place_theater',
        'status',
        'quantity',
        'price',
        'discount',
        'total_amount',
        'seat_selection',
        'city',
        'theater',
        'show_time',
        'payment_method',
        'status',
    ]; 
}