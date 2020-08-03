<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    protected $fillable=[
        'phone', 'email', 'address',
    ];
}
