<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
class Order extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => ['user.name', 'item.title', 'quantity']
            ]
        ];
    }
    
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
