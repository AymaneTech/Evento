<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        "name",
        "description",
        "slug"
    ];

    public function getRouteKeyName(): string
    {
        return "slug";
    }

    public function sluggable(): array
    {
        return [
            "slug" => [
                "source" => "name"
            ]
        ];

    }

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
