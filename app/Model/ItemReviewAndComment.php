<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ItemReviewAndComment extends Model
{
    protected $fillable=[
        'user_id', 'item_id', 'comment', 'review', 
    ];

    public function item(){
        return $this->belongsTo('App\Model\Shop');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
