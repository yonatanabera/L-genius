<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class BlogComment extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => ['user.name', 'blog.title']
            ]
        ];
    }

    protected $fillable=[
        'user_id', 'comment', 
    ];

    public function blog(){
        return $this->belongsTo('App\Model\Blog');
    }

    public function reply(){
        return $this->hasMany('App\Model\BlogCommentReply', 'comment_id');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
