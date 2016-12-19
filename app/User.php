<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $table = "users";
    
    protected $guarded = ['id'];

    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'github_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function meteos()
    {
        return $this->belongsToMany(\App\Meteo::class);
    }

    public function roles()
    {
        return $this->belongsToMany(\App\Role::class);
    }
}
