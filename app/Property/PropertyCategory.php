<?php

namespace App\Property;

use Illuminate\Database\Eloquent\Model;

class PropertyCategory extends Model
{

    protected $fillable = [ 'category'];

    public function property()
    {
        return $this->belongsTo(Property::class, 'id', 'property_cate_id');
    }
}
