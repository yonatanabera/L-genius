<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable=[
        'position','article_photo', 'about_title', 'organization_statement', 'profile_card_image', 'profile_card_description',
    ];

    public $directory='images/about/';

    public function getArticlePhotoAttribute($value){
        return $this->directory.$value;
    }

    public function getProfileCardImageAttribute($value){
        return $this->directory.$value;
    }
}
