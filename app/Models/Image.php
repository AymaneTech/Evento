<?php

namespace App\Models;

use App\Traits\HasImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory, HasImage;

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
