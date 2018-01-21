<?php

use Faker\Generator as Faker;

$factory->define(App\AgendaSessions::class, function (Faker $faker) {
    return [
        'session_title' => $faker->unique()->catchPhrase,
        'session_description' => $faker->realText($maxNbChars = 200, $indexSize = 2), // secret
        'category_id' => 1,
        'start_time' => '2018-03-'.rand(15, 16).' '.rand(8,17).':'.rand(0,59).':00',
        'end_time' => '2018-03-'.rand(15, 16).' '.rand(8,17).':'.rand(0,59).':00',
        'extra_category' => null
    ];
});
