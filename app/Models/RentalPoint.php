<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalPoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number_of_seats',
        'latitude',
        'longitude'
    ];
}
