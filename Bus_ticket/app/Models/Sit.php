<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sit extends Model
{
    use HasFactory;
    protected  $guarded = [];

    const Expire_Time = 1;

    public function scopeExpired($query)
    {
        return $query->where('paid', 0)->where('created_at', '<', Carbon::now()->subHours(self::Expire_Time));
    }

    public function scopePending($query)
    {
        return $query->where('paid', 0)->where('created_at', '>', Carbon::now()->subHours(self::Expire_Time));
    }

    public function scopeReserved($query)
    {
        return $query->where('paid', 1);
    }


    #region RelationShip
    public function carway()
    {
        return $this->belongsTo(CarWay::class, 'car_way_id');
    }

    public function tickets()
    {
        return $this->belongsTo(Ticket::class, 'sit_id');
    }
    #endregion
}
