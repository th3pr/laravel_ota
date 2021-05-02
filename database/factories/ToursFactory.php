<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Tour;

$factory->define(Tour::class, function (Faker $faker) {
    $fakeAddress = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28155.498759348007!2d30.740541754090838!3d28.10270074451467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145b2500ef4e77ab%3A0xb2ea14850bbd47b5!2z2YHZhtiv2YIg2LnZhdixINin2YTYrtmK2KfZhSDYp9mE2YXZhtmK2KcgLSBPbWFyIEVsLUtoYXlhbSBBbCBNaW55YSBIb3RlbA!5e0!3m2!1sen!2seg!4v1619805956424!5m2!1sen!2seg';
    $fakeImage = 'https://loremflickr.com/840/580/egypt,tour/all?random=';
    return [
        'tour_name'=> $faker->sentence(1),
        'tour_price' => $faker->numerify('####'),
        'tour_address' => $fakeAddress,
        'tour_discount' => $faker->numerify('#'),
        'tour_details' => $faker->paragraph(7),
        'tour_image' => $fakeImage.$faker->numberBetween(1,50),
        'user_id' => App\User::all()->random()->id,
        // 'tour_guide_id',
        'created_at' =>now(),
        'updated_at' =>now()
    ];
});
