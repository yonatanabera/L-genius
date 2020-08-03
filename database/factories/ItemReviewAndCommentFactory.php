<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\ItemReviewAndComment;
use Faker\Generator as Faker;

$factory->define(ItemReviewAndComment::class, function (Faker $faker) {
    return [
        //
        'user_id'=>App\User::all()->random()->id,
        'item_id'=>App\Model\Shop::all()->random()->id,
        'comment'=>$faker->sentence,
        'review'=>$faker->numberBetween(1,5),
    ];
});
