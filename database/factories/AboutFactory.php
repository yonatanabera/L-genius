<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\About;
use Faker\Generator as Faker;

$factory->define(About::class, function (Faker $faker) {
    return [
        //
        'about_title'=>$faker->word,
        'organization_statement'=>$faker->paragraph,
        'profile_card_description'=>$faker->paragraph,
        'position'=>$faker->word,
    ];
});
