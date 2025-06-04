<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DebutanteRelease extends Model
{
    use HasFactory;
    protected $fillable =[
    'model_name',
    'email',
    'date',
    'signature'];
}
