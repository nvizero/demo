<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use App\Models\Post;
use App\User;

$factory->define(Post::class, function (Faker $faker) {    
    return [
        'title' => $faker->realText($maxNbChars = 15),
        'category_id' => rand(1, 4),
        'content' => $faker->realText($maxNbChars = 200),
        'user_id' => rand(1, 3),
        'username' => $faker->realText($maxNbChars = 15)
    ];
});
