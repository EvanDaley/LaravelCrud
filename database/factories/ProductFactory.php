<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    $descriptors = [
        'Pumpkin Spice',
        'Rusty',
        'Giant',
        'Timey-whimey',
        'Sonic',
        'Mostly-working',
        'Mostly-working (flickers)',
    ];

    $objects = [
        'Energy Sword',
        'Metal Balls',
        'Grenade',
        'Disaster Oven',
        'Screwdriver',
        'Pikachu (Real)',
    ];

    // Faker randomElement seems to select the same thing multiple times in a row if 
    // it is called multiple times within the same second. In order to ensure uniquness
    // and randomness we combine the two lists into one giant list and then use $faker->unique
    // to guarantee that we don't get the same pairing twice. Note that this will have a large
    // memory footprint if both arrays become large.
    $allOptions = [];
    foreach($descriptors as $descriptor) {
        foreach($objects as $object) {
            $allOptions[] = "$descriptor $object";
        }
    }

    $title = $faker
        ->unique()
        ->randomElement($allOptions);

    return [
        'title' => $title,
        'description' => "$title sold Evan's Mostly Functional Goods.",
    ];
});
