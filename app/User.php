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

    // return all friends of current usr
    public function friendsOfMine(){
      return $this ->belongsToMany('App\User','friends','user_id','friend_id');
    }

    // if i am friend of other user
    public function friendsOf(){
      return $this ->belongsToMany('App\User','friends','friend_id','user_id');
    }

    public function friends(){
      return $this ->friendsOfMine->merge($this->friendsOf);
    }


}
