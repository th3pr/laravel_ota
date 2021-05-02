<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Car;

$factory->define(Car::class, function (Faker $faker) {
    $fakeImage = 'https://loremflickr.com/840/580/cars/all?random=';
    return [
        'car_model' => $faker->sentence(1),
        'car_price' => $faker->numerify('###'),
        'car_details' => $faker->paragraph(5),
        'car_image' => $fakeImage.$faker->numberBetween(1,50),
        'user_id' => App\User::all()->random()->id,
        'discount' => $faker->numerify('#'),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
