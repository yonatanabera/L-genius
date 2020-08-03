<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\BlogComment;
use Faker\Generator as Faker;

$factory->define(BlogComment::class, function (Faker $faker) {
    return [
        //
        'user_id'=> App\User::all()->random()->id,
        'blog_id'=> App\Model\Blog::all()->random()->id,
        'comment'=>$faker->paragraph,
    ];
});
