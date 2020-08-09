<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
class About extends Model
{
   
    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'position'
            ]
        ];
    }
    

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
