<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\YourThought;
use Faker\Generator as Faker;

$factory->define(YourThought::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->name,
        'email'=>$faker->safeEmail,
        'subject'=>$faker->word,
        'message'=>$faker->paragraph,
    ];
});
