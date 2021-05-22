<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandUserStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
}
