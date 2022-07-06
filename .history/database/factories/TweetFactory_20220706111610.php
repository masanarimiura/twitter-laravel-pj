<?php

namespace Database\Factories;

use App\Models\Tweet;
use Illuminate\Database\Eloquent\Factories\Factory;

class TweetFactory extends Factory
{
    protected $model = Tweet::class;

    public function definition()
    {
        return [
            'content' => $this->faker->text(50), 
            'user_id' => $this->faker->randomNumber(), 
        ];
    }
}
