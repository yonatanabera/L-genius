<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $fillable=[
        'name',
    ];

    public function blogs(){
        return $this->hasMany('App\Model\Blog', 'category_id');
    }
}
