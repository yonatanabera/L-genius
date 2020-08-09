<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class ItemCategory extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => ['name', 'items.title']
            ]
        ];
    }
    protected $fillable=[
        'name',
    ];

    public function items(){
        return $this->hasMany('App\Model\Shop', 'category_id');
    }
}
