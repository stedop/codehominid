<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Post::class, function (Faker $faker) {
    $title = $faker->text();
    return [
        'category_id' => function () {
            return factory(\App\Models\Category::class)->create()->id;
        },
        'title' => $title,
        'slug' => str_slug($title),
        'description' => $faker->paragraph(2),
        'summary' => $faker->paragraph(1),
        'contents' => $faker->paragraph(15),
        'status' => $faker->boolean(),
        'comments' => $faker->boolean(),
        'featured' => $faker->boolean()
    ];
});
