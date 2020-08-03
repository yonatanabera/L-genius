<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model
{
    protected $fillable=[
        'identity', 'mission', 'vision', 'value',
    ];
}
