<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Blog\Blog::class, function (Faker $faker) {
    $user = \App\Models\Account\User::select('id')->inrandomOrder()->first();
    $category = \App\Models\Activity\Category::select('id')->inrandomOrder()->first();
    $title = $faker->sentence($nbWords = rand(4,10), $variableNbWords = true);
    return [
        'title' => $title,
        'subtitle' => $faker->sentence($nbWords = rand(8,14), $variableNbWords = true),
        'body' => $faker->text($maxNbChars = rand(800,1400)),
        'img' => $faker->numberBetween(1,1000),
        'published_on' => $faker->dateTime('now')->format('Y-m-d h:m:s'),
        'slug' => str_slug($title,'-'),
        'users_id' => $user->id,
        'categories_id' => $category->id
    ];
});
