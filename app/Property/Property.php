<?php

namespace App\Property;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

protected $guarded = [];


    public function user(){
        return $this->belongsTo(User::class);

    }
    public function statuses()
    {
        return $this->belongsToMany(Status::class);
    }
    public function additional_detail()
    {
        return $this->hasOne(AdditionalDetail::class);
    }
    public function additional_features()
    {
        return $this->hasMany(AdditionalFeature::class);
    }
    public function property_images()
    {
        return $this->hasMany(PropertyImageGellary::class);
    }
    public function property_cat()
    {
        return $this->hasOne(PropertyCategory::class, 'id', 'property_cate_id');
    }
}
