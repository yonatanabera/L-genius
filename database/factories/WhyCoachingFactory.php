<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\WhyCoaching;
use Faker\Generator as Faker;

$factory->define(WhyCoaching::class, function (Faker $faker) {
    return [
        //
        'title1'=>$faker->word,
        'description1'=>$faker->paragraph,
        'title2'=>$faker->word,
        'description2'=>$faker->paragraph,
        'title3'=>$faker->word,
        'description3'=>$faker->paragraph,
        'title4'=>$faker->word,
        'description4'=>$faker->paragraph,
    ];
});
