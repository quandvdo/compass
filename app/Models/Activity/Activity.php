<?php

namespace App\Models\Activity;

use App\Models\Finance\Merchant;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $casts = [
        'isActive' => 'boolean',
    ];

    public function price()
    {
        return $this->hasOne(Price::class, 'activities_id', 'id');
    }

    public function itinerary()
    {
        return $this->hasMany(Itinerary::class, 'activities_id', 'id');
    }

}
