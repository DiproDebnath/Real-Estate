<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Property\Property;
use Faker\Generator as Faker;

$factory->define(Property::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description' => $faker->text,
        'price' => $faker->randomNumber(2),
        'featured' => random_int(0, 1),
        'city' => $faker->city,
        'zip_code' => $faker->postcode,
        'street' => $faker->streetName,
        'area' => $faker->streetAddress,
        "property_category_id" => 1
    ];
});
