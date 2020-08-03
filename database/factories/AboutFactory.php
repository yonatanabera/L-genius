<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\About;
use Faker\Generator as Faker;

$factory->define(About::class, function (Faker $faker) {
    return [
        //
        'article_photo'=>'images/about-me-e1473408888274.jpg',
        'about_title'=>$faker->word,
        'organization_statement'=>$faker->paragraph,
        'profile_card_image'=>'images/about-me-e1473408888274.jpg',
        'profile_card_description'=>$faker->paragraph,
    ];
});
