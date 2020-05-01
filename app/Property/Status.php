<?php

namespace App\Property;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['title'];

    public function properties()
    {
        return $this->belongsToMany(Property::class);
    }
}
