<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ItemCategory extends Model
{
    protected $fillable=[
        'name',
    ];

    public function items(){
        return $this->hasMany('App\Model\Shop', 'category_id');
    }
}
