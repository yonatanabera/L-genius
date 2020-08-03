<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\MainService;
use Faker\Generator as Faker;

$factory->define(MainService::class, function (Faker $faker) {
    return [
        //
        'content'=>'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from “de Finibus Bonorum et Malorum” by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.'
    ];
});
