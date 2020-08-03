<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BlogCommentReply extends Model
{
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
