<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $guarded = [];
    #endregion

    #region RelationShip
    public function companies()
    {
        return $this->belongsToMany(Company::class, 'company_route', 'route_id', 'company_id');
    }

    public function ways()
    {
        return $this->hasMany(Way::class, 'route_id');
    }
    #endregion

}
