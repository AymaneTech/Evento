<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [];
    protected $casts = [
        'date' => 'datetime',
    ];

    public function images()
    {
        return $this->hasMany(Image::class, "imageable_id");
    }
    public function getRouteKeyName(): string
    {
        return "slug";
    }

    public function sluggable(): array
    {
        return [
            "slug" => [
                "source" => "title",
            ]
        ];
    }

}
