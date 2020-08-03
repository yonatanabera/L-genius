<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Shop;
use Faker\Generator as Faker;

$factory->define(Shop::class, function (Faker $faker) {
    return [
        //
        'title'=>$faker->word,
        'price'=>$faker->numberBetween(100,250),
        'readmore'=>$faker->paragraph,
        'category_id'=>App\Model\ItemCategory::all()->random()->id,
    ];
});
