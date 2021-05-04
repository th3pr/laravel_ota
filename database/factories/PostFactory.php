<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $fakeImage = 'https://loremflickr.com/840/580/reading/all?random=';
    return [
        'post_title' => $faker->sentence(),
        'post_body' => $faker->paragraph(),
        'featured_image' => $fakeImage.$faker->numberBetween(1,50),
        'status' => 1,
        'category_id' => App\Category::all()->random()->id,
        'user_id' => App\User::all()->random()->id,
    ];
});
