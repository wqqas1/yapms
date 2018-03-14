<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Account::class, function (Faker $faker) {
    return [
        'name'       => $faker->company,
        'address1'   => $faker->streetAddress,
        'city'       => $faker->city,
        'state'      => $faker->stateAbbr,
        'zip'        => $faker->postcode,
        'email'      => $faker->companyEmail,
        'phone'      => $faker->numberBetween($min = 200, $max = 900) . $faker->numberBetween($min = 200, $max = 900) . $faker->numberBetween($min = 2000, $max = 9000),
        'toll_free'  => '800' . $faker->numberBetween($min = 200, $max = 900) . $faker->numberBetween($min = 2000, $max = 9000),
        'fax'        => $faker->numberBetween($min = 200, $max = 900) . $faker->numberBetween($min = 200, $max = 900) . $faker->numberBetween($min = 2000, $max = 9000),
        'created_by' => 1,
        'updated_by' => 1
    ];
});
