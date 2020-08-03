<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class YourThought extends Model
{
    protected $fillable=[
        'name', 'email', 'subject', 'message',
    ];
}
