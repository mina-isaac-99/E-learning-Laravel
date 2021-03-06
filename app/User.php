<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','img','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];


    public function courses()
    {
        return $this->hasMany('App\Course');
    }
    public function enrollments()
    {
        return $this->hasMany('App\Enrollment');
    }
   
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
   
}
