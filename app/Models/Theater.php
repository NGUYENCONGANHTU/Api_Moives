<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theater extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_place_theater',
        'name',
        'descript',
        'address',
        'calendar',
        'img',
        'map',
        'phone',
        'price_ticket',
        'hotline',
    ]; 
}