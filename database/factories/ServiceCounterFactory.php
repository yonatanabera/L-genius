<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\ServiceCounter;
use Faker\Generator as Faker;

$factory->define(ServiceCounter::class, function (Faker $faker) {
    return [
        //
        'satisfied_clients'=>1500,
        'ongoing_projects'=>211,
        'completed_projects'=>11201,
        'graduated_entrepreneurs'=>35612,
    ];
});
