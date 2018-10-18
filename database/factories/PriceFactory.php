<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Activity\Price::class, function (Faker $faker) {
    return [
        'startDate' => $faker->dateTimeBetween($startDate = '-3 months', $endDate = 'now', $timezone = 'UTC')->format('Y-m-d h:m:s'),
        'endDate' => $faker->dateTimeBetween($startDate = '+2 months', $endDate = '+6 months', $timezone = 'UTC')->format('Y-m-d h:m:s'),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 4000),
        'isDeposit' => $faker->boolean(40),
        'valueDeposit' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 999),
    ];
});
