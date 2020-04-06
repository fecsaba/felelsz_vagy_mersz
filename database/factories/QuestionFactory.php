<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'feladat' => 'Kérdés: '.$faker->sentence($nbWords = 6, $variableNbWords = true),
        'szint' => $faker->numberBetween($min = 1, $max = 3)
    ];
});
