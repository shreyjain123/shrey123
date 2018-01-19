<?php

$factory->define(App\WorkingHour::class, function (Faker\Generator $faker) {
    return [
        "employee_id" => factory('App\Employee')->create(),
        "date" => $faker->date("m/d/Y", $max = 'now'),
        "start_time" => $faker->date("H:i:s", $max = 'now'),
        "finish_time" => $faker->date("H:i:s", $max = 'now'),
    ];
});
