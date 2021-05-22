<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desctiption', 
        'user_id',
        'latitude',
        'longitude',
        'mark_color_id',
        'mark_status_id'
    ];
}
