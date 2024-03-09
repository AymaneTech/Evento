<?php

namespace App\Models;

class Participant extends User
{
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    public function image()
    {
        return $this->hasOne(Image::class, "imageable_id");
    }
}
