<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
'name' => $faker->text(20),
    'description' => $faker->text(50),
'name_of_place' => $fake->text(20)
    ];
});
