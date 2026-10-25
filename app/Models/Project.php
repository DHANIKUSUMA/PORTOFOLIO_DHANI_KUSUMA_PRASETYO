<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'summary',
        'description',
        'role',
        'year',
        'technologies',
        'thumbnail',
        'problem',
        'objectives',
        'my_contribution',
        'process',
        'verified_results',
        'demo_url',
        'repository_url',
        'figma_url',
        'is_featured',
        'sort_order',
    ];

    protected $casts = [
        'technologies' => 'array',
        'is_featured' => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProjectImage::class)->orderBy('sort_order', 'asc');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
