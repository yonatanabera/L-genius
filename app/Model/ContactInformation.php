<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class ContactInformation extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'address'
            ]
        ];
    }
    protected $fillable=[
        'phone', 'email', 'address',
    ];
}
