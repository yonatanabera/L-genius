<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Testimonial;
use Faker\Generator as Faker;

$factory->define(Testimonial::class, function (Faker $faker) {
    return [
        //
        'username'=>$faker->name, 
        'position'=>$faker->word, 
        'text'=>$faker->paragraph,
    ];
});
