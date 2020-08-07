<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title'=>$faker->word,
        'short_note'=>implode($faker->paragraphs),
        'content'=>$faker->paragraph,
        'count'=>$faker->numberBetween(100,300),
        'category_id'=>App\Model\BlogCategory::all()->random()->id,
    ];
});
