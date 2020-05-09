<?php

namespace App;

use App\Property\Property;
use Cmgmyr\Messenger\Traits\Messagable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Messagable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'bio', 'image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function properties()
    {
        return $this->hasMany(Property::class);
    }
    public function hasAnyRoles($roles){
        if($this->Roles()->whereIn('name', $roles)->first()){
            return true;
        }
        return false;
    }
    public function hasRole($role){
        if($this->Roles()->where('name', $role)->first()){
            return true;
        }
        return false;
    }
}
