<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Rennokki\QueryCache\Traits\QueryCacheable;

class Booking extends Model
{
    use HasFactory, QueryCacheable;

    public int $cacheFor = 3600;
    protected static bool $flushCacheOnUpdate = true;

    protected $fillable = [
        "event_id",
        "participant_id",
        "isConfirmed"
    ];

    public function ScopeTotalMoneyFromOrganiserBookedEvents()
    {
        return $this->whereExists(function ($query) {
            $query->select(DB::raw(1))
                ->from('events')
                ->whereColumn('bookings.event_id', 'events.id')
                ->where('organiser_id', auth('organiser')->id());
        })->sum(DB::raw('(SELECT price FROM events WHERE bookings.event_id = events.id)'));
    }

    public function ScopeTodayBookingsCount()
    {
        return $this->whereHas("event", function ($query) {
            return $query->where("organiser_id", auth("organiser")->id());
        })->count();
    }
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }
}
