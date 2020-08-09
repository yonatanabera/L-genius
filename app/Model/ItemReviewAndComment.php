<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class ItemReviewAndComment extends Model
{
    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => ['user.name', 'item.title']
            ]
        ];
    }
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
