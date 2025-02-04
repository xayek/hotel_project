<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallary extends Model
{
    use HasFactory;

    protected $fillable = [
        'image'
    ];
}
