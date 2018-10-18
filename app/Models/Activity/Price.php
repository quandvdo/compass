<?php

namespace App\Models\Activity;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'activity_prices';
    protected $casts = [
        'isDeposit' => 'boolean'
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class, 'id', 'activities_id');
    }
}
