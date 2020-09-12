<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {

    $gender = $faker->randomElements(['male', 'female'])[0];

    return [
        'gender' => $gender,
        'fullname' => $faker->name($gender),
        'email' => $faker->unique()->safeEmail(),
        'phone' => $faker->numberBetween(3101000000, 3202000000),
        'birthdate' => $faker->dateTimeBetween('-60 years', '39', null),
        'address' => 'Calle 50 # 5 L 98 C',
        'photo' => $faker->image('public/storage/images',640,480, null, true),
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
