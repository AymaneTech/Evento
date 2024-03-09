<?php

namespace App\Models;

class Admin extends User
{
    public function image()
    {
        return $this->hasOne(Image::class, "imageable_id");
    }
}
