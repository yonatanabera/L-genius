<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable=[
        'user_photo', 'username', 'text', 'position',
    ];

    public $directory="/images/testimonials/";

    public function getUserPhotoAttribute($value){
        return $this->directory.$value;
    }
}
