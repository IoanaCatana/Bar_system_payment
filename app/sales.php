<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'items', 'roles', 'price','date',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array

    protected $hidden = [
    'password', 'remember_token',
    ];*/
}
