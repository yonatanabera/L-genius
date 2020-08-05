<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\WhyCoaching;
use Faker\Generator as Faker;

$factory->define(WhyCoaching::class, function (Faker $faker) {
    return [
        //
        'title'=>$faker->word,
        'description'=>$faker->paragraph,
       
    ];
});
