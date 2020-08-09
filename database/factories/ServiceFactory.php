<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        //
        'icon'=>'fa fa-lg fa-star-o',
        'title'=>$faker->word,
        'short_note'=>$faker->paragraph,
        'content'=>$faker->paragraph,
    ];
});
