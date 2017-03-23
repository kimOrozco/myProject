<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Broadcast extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'program', 
        'country', 
        'channel',
        'day', 
        'time'
    ];
    protected $table = 'broadcasts';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   
}
