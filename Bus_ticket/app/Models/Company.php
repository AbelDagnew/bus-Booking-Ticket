<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected  $guarded = [];


    #region HelperMethod
    public function admin()
    {
        foreach ($this->users as $key => $user) {
            if ($user->hasRole('Campany Admin')) {
                return $user;
            }
        }
        return null;
    }

    public function organizer()
    {
        foreach ($this->users as $user) {
            if ($user->hasRole('Organizer')) {
                return $user;
            }
        }
        return null;
    }

    public function ticketOfficers()
    {
        $officers = array();
        foreach ($this->users as $user) {
            if ($user->hasRole('Ticket Officer')) {
                array_push($officers, $user);
            }
        }
        return $officers;
    }

    public function oneWayRoute()
    {
        $routes = array();

        foreach ($this->routes as $key => $value) {
            if ($value->id % 2 == 1) {
                array_push($routes, $value);
            }
        }

        return $routes;
    }

    public function waysByDateAndRoute($date, $route_id)
    {
        return $this->ways->where('t_date', $date)->where('route_id', $route_id);
    }

    #endregion

    #region RelationShip
    public function cars()
    {
        return $this->hasMany(Car::class, 'company_id');
    }

    public function users()
    {
        return $this->morphToMany(User::class, 'userable');
    }

    public function routes()
    {
        return $this->belongsToMany(\App\Models\Route::class, 'company_route', 'company_id', 'route_id');
    }

    public function ways()
    {
        return $this->hasMany(Way::class, 'company_id');
    }

    public function carways()
    {
        return $this->hasManyThrough(CarWay::class, Way::class);
    }
    #endregion
}
