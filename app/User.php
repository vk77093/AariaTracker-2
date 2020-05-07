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
        'name', 'email', 'password','empCode','mobileNum','designation','region','regionHead','group','cityregion','user_role',
    ];
    //protected $primaryKey = 'user_id';

    public function trackermasters(){
      return $this->hasMany('App\Trackermaster');
    }

    public function visit_updates(){
      return $this->hasMany('App\VisitUpdate');
    }
    public function compmaster(){
      return $this->hasMany('App\CompanyMaster');
    }

    public function isUser(){
      if($this->user_role=='user'){
        return true;
      }else{
        return false;
      }
    }
    // for admin right
    public function isAdmin(){
      if($this->user_role=='admin'){
        return true;
      }else{
        return false;
      }
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
