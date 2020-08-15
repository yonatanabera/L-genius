<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Shop extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    protected $fillable=[
        'title', 'price', 'readmore', 'category_id', 'photo', 'content',
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

    public $directory="images/shops/";

    public function getPhotoAttribute($value){
        return $this->directory.$value;
    }
}
