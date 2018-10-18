<?php

namespace App\Models\Activity;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table='activity_details';

    public function activity()
    {
        return $this->belongsTo(Activity::class,'id','activitis_id');
    }
}
