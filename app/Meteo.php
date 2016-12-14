<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Meteo extends Model
{
    use Notifiable;

    protected $guarded = ['id'];

    public function users()
    {
    	return $this->belongsToMany(\App\User::class);
    }
}
