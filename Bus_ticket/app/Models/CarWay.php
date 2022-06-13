<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarWay extends Model
{
    use HasFactory;

    public function getcar()
    {
        return Car::find($this->car_id);
    }

    public function getway()
    {
        return Way::find($this->way_id);
    }

    public function company()
    {
        return $this->way()->company;
    }

    public function scopeFilled($query, $value)
    {
        return $query->where('filled', $value);
    }

    public function scopeWay($query, $value)
    {
        return $query->where('way_id', $value);
    }

    public function sits()
    {
        return $this->hasMany(Sit::class, 'car_way_id');
    }
}
