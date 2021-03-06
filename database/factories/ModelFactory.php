<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        //'password' => $password ?: $password = bcrypt('secret'),
        'password' => $password ?: $password = bcrypt('12345'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Question_type::class, function (Faker\Generator $faker) {

    return [
        'type' => $faker->name,
        'description' => $faker->text(),
    ];
});

$factory->define(App\Question::class, function (Faker\Generator $faker) {
    $questions = \DB::table('question_types')->select('id')->get()->toArray();

    return [
        'question' => $faker->text(100),
        'question_types_id' => $faker->randomElement($questions)->id,
    ];
});
