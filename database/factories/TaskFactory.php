<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'feladat' => 'Feladat: '.$faker->sentence($nbWords = 6, $variableNbWords = true),
        'szint' => $faker->numberBetween($min = 1, $max = 3)
    ];
});
