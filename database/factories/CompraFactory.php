<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Compra::class, function (Faker $faker) {
    return [
        'producto' => $faker->sentence(1),
        'cantidad' => rand(1, 5)
    ];
});
