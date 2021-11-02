<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Plant;
use Faker\Generator as Faker;

$factory->define(Plant::class, function (Faker $faker) {
    return [
            'utility_name'=> $faker->name,
            'Period'=>'2019',
           'Employees'=>$faker->randomFloat(2,40,500),
            'Capital'=> $faker->randomFloat(3,5000,9000),
            'maintenanceCosts'=>$faker->randomFloat(3,5000,9000),
            'Sales'=>$faker->randomFloat(3,5000,9000),
            'otherRevenue'=>$faker->randomFloat(3,5000,9000),
    ];
});
