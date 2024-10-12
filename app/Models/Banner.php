<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'banner';
    protected $fillable = [
        'link',
        'title',
        'description',
        'start_date',
        'end_date',
        'status'
    ];
}