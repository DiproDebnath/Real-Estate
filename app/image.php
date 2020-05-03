<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $guarded =[];
    public function user()
    {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }
}
