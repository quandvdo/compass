<?php

use App\Models\Account\User;
use Faker\Generator as Faker;

$factory->define(App\Models\Finance\Merchant::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'company' => $faker->company,
        'address' => $faker->address,
        'city' => $faker->city,
        'country' => strtolower($faker->countryCode),
        'phone' => '09' . $faker->numberBetween(10000000, 99999999),
        'email' => $faker->companyEmail,
        'rate' => $faker->randomFloat(2, 0, 1),
        'users_id' => 1
    ];
});
