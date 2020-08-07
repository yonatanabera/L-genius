<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CallbackRequest extends Model
{
    protected $fillable=[
        'name', 'email', 'phone', 'topic', 'description',
    ];

//   
}
