<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\BlogCommentReply;
use Faker\Generator as Faker;

$factory->define(BlogCommentReply::class, function (Faker $faker) {
    return [
        //
        'user_id'=>App\User::all()->random()->id,
        'comment_id'=>App\Model\BlogComment::all()->random()->id,
        'comment'=>$faker->paragraph,
    ];
});
