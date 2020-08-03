<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\CallbackRequest;
use Faker\Generator as Faker;

$factory->define(CallbackRequest::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->name,
        'email'=>$faker->unique()->safeEmail,
        'phone'=>$faker->phoneNumber, 
        'topic'=>$faker->word,
        'description'=>$faker->paragraph,
    ];
});
