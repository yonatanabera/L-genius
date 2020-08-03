<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
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
