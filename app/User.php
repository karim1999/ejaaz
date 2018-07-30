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
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function courses(){
        return $this->hasMany('App\Course');
    }
    public function reviews(){
        return $this->hasMany('App\Review');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function payments(){
        return $this->hasMany('App\Payment');
    }
    public function notifications(){
        return $this->hasMany('App\Notification');
    }
    public function certificates(){
        return $this->hasMany('App\Certificate');
    }
    public function education(){
        return $this->hasMany('App\Education');
    }
    public function jobs(){
        return $this->hasMany('App\Job');
    }



    public function joint_courses(){
        return $this->belongsToMany('App\Course', 'joint_courses');
    }
    public function favorites(){
        return $this->belongsToMany('App\Course', 'favorites');
    }
}
