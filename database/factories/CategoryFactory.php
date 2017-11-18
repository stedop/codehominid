<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->text(150),
        'description' => $faker->paragraph(2)
    ];
});
