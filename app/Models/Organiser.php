<?php

namespace App\Models;

class Organiser extends User
{
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
