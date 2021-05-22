<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'qr_code',
        'rental_point_id',
        'equipment_status_id',
        'equipment_type_id'
    ];
}
