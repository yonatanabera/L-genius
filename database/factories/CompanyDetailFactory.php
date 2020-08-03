<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\CompanyDetail;
use Faker\Generator as Faker;

$factory->define(CompanyDetail::class, function (Faker $faker) {
    return [
        //
        'identity'=>$faker->sentence,
        'mission'=>$faker->sentence,
        'vision'=>$faker->sentence,
        'value'=>$faker->sentence,
    ];
});
