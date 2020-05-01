<?php

namespace App\Property;

use Illuminate\Database\Eloquent\Model;

class FloorPlan extends Model
{
    protected $guarded = [];
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
    public function floorplan_image()
    {
        return $this->hasOne(PropertyImageGellary::class);
    }
}
