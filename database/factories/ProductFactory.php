<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
 
use Faker\Generator as Faker;
use App\Models\Product;
$factory->define(Product::class, function (Faker $faker) {
    return [        
        'name'=>$faker->slug(),
        'detail'=>$faker->realText($maxNbChars = 200),        
    ];
});
