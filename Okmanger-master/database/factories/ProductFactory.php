<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function(Faker $faker){
    return [
        'title' => $faker->title(1),
        'price' => $faker->numberBetween(5,80),
        'image' => $faker->imageUrl($width=400, $height=200, 'food'),
    ];
});





?>
