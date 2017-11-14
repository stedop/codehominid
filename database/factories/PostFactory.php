<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Post::class, function (Faker $faker) {
    return [
        'category_id' => function () {
            return factory(\App\Models\Category::class)->create()->id;
        },

    ];
});
