<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Testimonial;
use Faker\Generator as Faker;

$factory->define(Testimonial::class, function (Faker $faker) {
    return [
        //
        'user_photo'=>'https://via.placeholder.com/150',
        'username'=>$faker->name, 
        'text'=>$faker->paragraph,
    ];
});
