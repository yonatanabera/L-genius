<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class BlogCommentReply extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => ['user.name', 'comment.blog.title']
            ]
        ];
    }

    protected $fillable=[
        'user_id', 'comment_id', 
    ];

    public function comment(){
        return $this->belongsTo('App\Model\BlogComment');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
