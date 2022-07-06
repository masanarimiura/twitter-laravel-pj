<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Tweet;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'content' => $this->faker->text(50),
            'tweet_id' => $this->faker->randomNumber(1),
            'user_id' => $this->faker->randomNumber(1),
        ];
    }
}
