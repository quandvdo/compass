<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Activity\Detail::class, function (Faker $faker) {
    return [
        'type' =>$faker->numberBetween(1,3),
        'option' => $faker->text(rand(10,40)),
        'price' => $faker->numberBetween(0,1)
    ];
});
