<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'user_id', 'item_id', 'quantity', 
    ];

    public function user(){
        return $this->belongsTO('App\User');
    }

    public function item(){
        return $this->belongsTo('App\Model\Shop');
    }
}
