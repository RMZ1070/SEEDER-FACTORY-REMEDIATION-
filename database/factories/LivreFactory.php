<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Livre;
use Faker\Generator as Faker;

$factory->define(Livre::class, function (Faker $faker) {
    return [
        'titre' => $faker->catchPhrase,
        'annee' => $faker->date,
        'auteur' => $faker->name,
    ];
});
