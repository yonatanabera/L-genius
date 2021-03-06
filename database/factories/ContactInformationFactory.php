<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\ContactInformation;
use Faker\Generator as Faker;

$factory->define(ContactInformation::class, function (Faker $faker) {
    return [
        //
        'phone'=>$faker->phoneNumber,
        'email'=>$faker->safeEmail,
        'address'=>$faker->address,
    ];
});
