<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Meeting;

class Room extends Model
{
    protected $fillable = [
        
        'name',
        'slug',
        'description',
        'available_seats',
        'is_active',
        'can_teleconference'
      ];

public function meetings()
{
    return $this->hasMany(Meeting::class);
}   
}
