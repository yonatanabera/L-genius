<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable=[
        'title', 'price', 'readmore', 'category_id',
    ];


    public function orders(){
        return $this->belongsToMany('App\User', 'orders' ,'item_id', 'user_id');
    }

    public function category(){
        return $this->belongsTo('App\Model\ItemCategory');
    }

    public function review (){
        return $this->hasMany('App\Model\ItemReviewAndComment', 'item_id');
    }
}
