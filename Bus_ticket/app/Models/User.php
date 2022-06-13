<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    #region HelperMethode
    public function hasRole($role)
    {
        return $this->roles->where('name', $role)->count() == 1 ? true : false;
    }
    #endregion

    #region RelationShip
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }

    /**
     * Get all of the companies that are assigned this user.
     */
    public function companies()
    {
        return $this->morphedByMany(Company::class, 'userable');
    }

    /**
     * Get all of the cars that are assigned this user.
     */
    public function cars()
    {
        return $this->morphedByMany(Car::class, 'userable');
    }
    #endregion
}