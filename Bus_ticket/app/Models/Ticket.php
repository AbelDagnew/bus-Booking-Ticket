<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    #region RelationShip
    public function sit()
    {
        return $this->belongsTo(Sit::class, 'sit_id');
    }
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }

    public function way()
    {
        return $this->belongsTo(Way::class, 'way_id');
    }
    #endregion
}
