<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ServiceCounter extends Model
{
    protected $fillable=[
        'satisfied_clients', 'ongoing_projects', 'completed_projects', 'graduated_entrepreneurs',
    ];
}
