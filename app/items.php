<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id',  'image', 'description', 'price'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array

    protected $hidden = [
        'password', 'remember_token',
    ];*/
}
