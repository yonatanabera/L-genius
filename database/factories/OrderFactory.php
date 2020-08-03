<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        //
        'user_id'=>App\User::all()->random()->id,
        'item_id'=>App\Model\Shop::all()->random()->id,
        'quantity'=>$faker->numberBetween(1,15),
    ];
});
