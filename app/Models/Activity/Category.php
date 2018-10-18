<?php

namespace App\Models\Activity;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="activity_categories";
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'isActive' => 'boolean'
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class,'categories_id','id');
    }

}
