<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class histories extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user', 'role', 'sales','items','date'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array

    protected $hidden = [
    'password', 'remember_token',
    ];*/
}
