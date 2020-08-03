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
        'name', 'email', 'password','phone', 'photo', 'role_id'
    ];

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


    public function orders(){
        return $this->belongsToMany('App\Model\Shop', 'orders', 'user_id', 'item_id');
    }

    public function role(){
        return $this->belongsTo('App\Model\Role');
    }

    public function blogComment(){
        return $this->hasMany('App\Model\BlogComment');
    }

    public function blogCommentReply(){
        return $this->hasMany('App\Model\BlogCommentReply');
    }

    public function itemReview(){
        return $this->hasMany('App\Model\ItemReviewAndComment');
    }

  
    public function isAdmin(){
        if($this->role->name=='administrator'){
            return true;
        }
        return false; 
    }
}
