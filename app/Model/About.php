<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable=[
        'article_photo', 'about_title', 'organization_statement', 'profile_card_image', 'profile_card_description',
    ];
}
