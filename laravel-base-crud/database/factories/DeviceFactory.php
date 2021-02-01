<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Device;
use Faker\Generator as Faker;

$factory->define(Device::class, function (Faker $faker) {
    return [
        'name'  => $faker -> word,
        'model' => $faker -> swiftBicNumber,
        'price' => $faker -> numberBetween($min = 10, $max = 9000),
        'consumption' => $faker -> numberBetween($min = 1000, $max = 9000),
    ];
});
