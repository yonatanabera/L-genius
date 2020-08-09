<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class CompanyDetail extends Model
{
    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'identity'
            ]
        ];
    }
    
    protected $fillable=[
        'identity', 'mission', 'vision', 'value',
    ];
}
