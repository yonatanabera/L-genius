<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Shop;
use Faker\Generator as Faker;

$factory->define(Shop::class, function (Faker $faker) {
    return [
        //
        'title'=>$faker->word,
        'photo'=>'images/book1.jpg',
        'price'=>$faker->numberBetween(100,250),
        'readmore'=>$faker->paragraph,
        'content'=>implode($faker->paragraphs),
        'category_id'=>App\Model\ItemCategory::all()->random()->id,
    ];
});
