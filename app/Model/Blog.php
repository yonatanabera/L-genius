<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable=[
        'title', 'photo', 'content', 'count', 'category_id',
    ];

    public function category(){
        return $this->belongsTo('App\Model\BlogCategory');
    }

    public function comment(){
        return $this->hasMany('App\Model\BlogComment');
    }
}
