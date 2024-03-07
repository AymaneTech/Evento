<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Rennokki\QueryCache\Traits\QueryCacheable;

class Category extends Model
{
    use HasFactory, Sluggable, QueryCacheable;

    public int $cacheFor = 3600;
    protected static bool $flushCacheOnUpdate = true;

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

    public function image(): HasOne
    {
        return $this->hasOne(Image::class, "imageable_id");
    }

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
