<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doktarant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'long_description',
    ];
}
