<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'domaine',
        'role',
        'type',
        'presentation',
        'fonctionnalites',
        'image',
        'tags',
        'statut',
        'ordre',
        'visible',
        'exploration',
    ];

    protected $casts = [
        'tags' => 'array',
        'fonctionnalites' => 'array',
        'visible' => 'boolean',
        'exploration' => 'boolean',
    ];

    public function scopePrincipaux($query)
    {
        return $query->where('exploration', false);
    }

    public function scopeExplorations($query)
    {
        return $query->where('exploration', true);
    }
}
