<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'titre',
        'organisme',
        'periode',
        'lieu',
        'domaine',
        'description',
        'details',
        'ordre',
    ];

    protected $casts = [
        'details' => 'array',
    ];
}
