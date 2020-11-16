<?php

use Faker\Generator as Faker;


if (!empty($factory)) {
    $factory->define(App\Contact::class, function (Faker $faker) {
        $gender = $faker->randomElement(['male', 'female']);
        return [
            'nom' => $faker->name($gender),
            'civilite' => $gender,
            'prenom' => $faker->firstname($gender),
            'fonction' => $faker->jobTitle,
            'service' => $faker->catchPhrase,
            'email' => $faker->companyEmail,
            'telephone' => $faker->phoneNumber,
            'date_naissance' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'societe' => $faker->company,
            'adresse' => $faker->streetAddress,
            'code_postal' => $faker->postcode,
            'ville' => $faker->city,
            'site' => $faker->url,
            'numero' => $faker->buildingNumber,
        ];
    });
}
