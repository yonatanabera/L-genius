<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Service extends Model
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
    protected $fillable=[
        'title', 'content', 'icon', 'short_note', 'photo',
    ];

    public $directory="images/services/";
    
    public function getPhotoAttribute($value){
        return $this->directory.$value;
    }
}
