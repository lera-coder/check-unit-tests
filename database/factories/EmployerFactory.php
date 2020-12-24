<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Employer;
use Faker\Generator as Faker;

$factory->define(Employer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'card_code' => $faker->creditCardNumber,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
