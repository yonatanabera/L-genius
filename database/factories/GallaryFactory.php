<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Gallary;
use Faker\Generator as Faker;

$factory->define(Gallary::class, function (Faker $faker) {
    return [
        //
        'photo'=>'https://via.placeholder.com/150',
        'caption'=>$faker->sentence, 
    ];
});
