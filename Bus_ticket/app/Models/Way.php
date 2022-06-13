<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Way extends Model
{
    use HasFactory;
    protected  $guarded = [];


    public function scopeDate($query, $date)
    {
        return $query->where('t_date', $date);
    }

    public function scopeRoute($query, $id)
    {
        return $query->where('route_id', $id);
    }

    #region RelationShip
    public function cars()
    {
        return $this->belongsToMany(Car::class, 'car_ways', 'way_id', 'car_id');
    }

    public function carways()
    {
        return $this->hasMany(CarWay::class, 'way_id');
    }

    public function route()
    {
        return $this->belongsTo(Route::class, 'route_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
    #endregion
}
