<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected  $guarded = [];


    #region HelperMethod
    public function driver()
    {
        foreach ($this->users as $key => $user) {
            if ($user->hasRole('Driver')) {
                return $user;
            }
        }
        return null;
    }

    public function assistant()
    {
        foreach ($this->users as $user) {
            if ($user->hasRole('Assistant')) {
                return $user;
            }
        }
        return null;
    }
    #endregion

    #region RelationShip
    public function users()
    {
        return $this->morphToMany(User::class, 'userable');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function ways()
    {
        return $this->belongsToMany(Way::class, 'car_ways', 'car_id', 'way_id');
    }

    public function sits()
    {
        return $this->hasMany(Sit::class, 'car_id');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'car_id');
    }
    #endregion
}
