<?php

namespace App\Models;

use App\Traits\HasImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Rennokki\QueryCache\Traits\QueryCacheable;

class Image extends Model
{
    use HasFactory, HasImage, QueryCacheable, SoftDeletes;

    public int $cacheFor = 3600;
    protected static bool $flushCacheOnUpdate = true;

    protected $fillable = [
        "path",
        "imageable_type",
        "imageable_id",
    ];

    public function imageable()
    {
        return $this->morphTo();
    }
}
