<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization',
        'position',
        'type',
        'period',
        'description',
        'bullet_points',
        'sort_order',
    ];

    protected $casts = [
        'bullet_points' => 'array',
    ];
}
