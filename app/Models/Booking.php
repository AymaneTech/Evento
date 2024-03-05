<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        "event_id",
        "participant_id",
        "isConfirmed"
    ];
    public function events()
    {
        return $this->belongsTo(Event::class);
    }
}
