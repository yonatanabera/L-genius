<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Blog extends Model
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

    public $directory='images/blogs/';
    
    protected $fillable=[
        'title', 'photo', 'content', 'count', 'category_id', 'short_note',
    ];

    public function category(){
        return $this->belongsTo('App\Model\BlogCategory');
    }

    public function comment(){
        return $this->hasMany('App\Model\BlogComment')->latest();
    }

    public function getPhotoAttribute($value){
        return $this->directory.$value;
    }
}
