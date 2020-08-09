<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Testimonial extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'username'
            ]
        ];
    }
    protected $fillable=[
        'user_photo', 'username', 'text', 'position',
    ];

    public $directory="images/testimonials/";

    public function getUserPhotoAttribute($value){
        return $this->directory.$value;
    }
}
