<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Rennokki\QueryCache\Traits\QueryCacheable;

class Event extends Model
{
    use HasFactory, Sluggable, QueryCacheable, SoftDeletes;

    public int $cacheFor = 3600;
    protected static bool $flushCacheOnUpdate = true;

    protected $guarded = [];
    protected $casts = [
        'date' => 'datetime',
    ];

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

    public function ScopeFilter($query, array $filters)
    {
        $query->when($filters["search"] ?? false, fn($query, $search) => $query
            ->where("title", "like", "%" . $search . "%")
            ->orWhere("description", "like", "%" . $search . "%"));

        $query->when($filters["category"] ?? false, fn($query, $category) => $query
            ->whereHas('category', fn($query) => $query->where("name", $category)
            )
        );
    }

    public function ScopeOrganiserEvents()
    {
        return $this->with("category", "images")->where("organiser_id", auth("organiser")->user()->id);
    }

    public function ScopeVerifiedEvents()
    {
        return $this->with("organiser", "images", "category")->where("isVerified", "=", true);
    }

    public function images()
    {
        return $this->hasMany(Image::class, "imageable_id");
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function organiser()
    {
        return $this->belongsTo(User::class, "organiser_id");
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    public function getIsFullAttribute(){
        $bookingsCount = $this->loadCount("bookings")->bookings_count;
        return $this->numberOfSeats - $bookingsCount <= 0;
    }


}
