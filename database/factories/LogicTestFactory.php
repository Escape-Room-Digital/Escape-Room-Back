<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class LogictestFactory extends Factory
{
    
    public function definition()
    {
        return [
        'name'=>$this->faker->company(),
        'statement'=>$this->faker->company(),
        'question'=>$this->faker->company(),
        'correct'=>$this->faker->randomDigit(),
        'incorrect'=>$this->faker->randomDigit(),
        'clue'=>$this->faker->company(),
        'image'=>$this->faker->company(),
        ];
    }
}
