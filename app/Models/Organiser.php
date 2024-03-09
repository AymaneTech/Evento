<?php

namespace App\Models;

class Organiser extends User
{
    public function events()
    {
        return $this->hasMany(Event::class);
    }
    public function image()
    {
        return $this->hasOne(Image::class, "imageable_id");
    }
}
