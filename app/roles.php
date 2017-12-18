<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cashier', 'teacher', 'student',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
