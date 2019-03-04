<?php

use Faker\Generator as Faker;
use app\model\product;

$factory->define(App\model\review::class, function (Faker $faker) {
    return [
        //
        'product_id' => function(){
            return Product::all()->random();
        },
        'customer' => $faker->name,
        'review' => $faker->paragraph,
        'star' => $faker->numberBetween(0,5)
    ];
});
