<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room;

class Meeting extends Model
{
    protected $fillable =[
        'meeting_room_id',
        'scheduled_by',
        'date_time_from',
        'date_time_to',
        'meeting_details',
    ];

    public function rooms()
    {
        return $this->belongsTo(Room::class);
    }
}
