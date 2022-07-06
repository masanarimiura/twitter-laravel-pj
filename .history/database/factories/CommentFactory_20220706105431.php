<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Tweet::class;

    public function definition()
    {
        return [
            'content' => $this->faker->text(50), 
        ];
    }
}
