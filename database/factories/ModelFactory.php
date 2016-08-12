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

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Posts::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
        
    ];
});


$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->sentence,
        'email' => $faker->sentence,
        'comment' => $faker->paragraph,
        'post_id'=>factory(App\Posts::class)->create()->id,
    ];
}); 
$factory->define(App\Tag::class, function (Faker\Generator $faker) {
    return [
        'tag' => $faker->word,
        
        
    ];
});


