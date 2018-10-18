<?php

namespace App\Models\Activity;

use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    protected $table='activity_itineraries';

    public function activity()
    {
        return $this->belongsTo(Activity::class,'id','activities_id');
    }
}
