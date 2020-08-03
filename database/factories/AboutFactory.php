<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\About;
use Faker\Generator as Faker;

$factory->define(About::class, function (Faker $faker) {
    return [
        //
        'article_photo'=>'https://via.placeholder.com/150',
        'about_title'=>$faker->word,
        'organization_statement'=>$faker->paragraph,
        'profile_card_image'=>'https://via.placeholder.com/150',
        'profile_card_description'=>$faker->paragraph,
    ];
});
