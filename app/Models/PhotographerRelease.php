<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotographerRelease extends Model
{
    use HasFactory;
    protected $fillable = [
        'debutante_name',
        'business_name',
        'email',
        'date',
        'signature',
    ];
}
