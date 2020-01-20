<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->title(),
        'body' => $faker->paragraph(),
        'user_id' => factory(User::class)->create()->id,
        'created_by' => factory(User::class)->create()->name,
    ];
});
