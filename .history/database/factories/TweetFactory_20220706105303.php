<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TweetFactory extends Factory
{
    protected $model = Tweet::class;

    public function definition()
    {
        return [
            'content' => $this->faker->name(), 
        ];
    }
}
