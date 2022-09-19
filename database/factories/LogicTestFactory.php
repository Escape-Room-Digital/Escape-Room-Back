<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LogictestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'name'=>$this->faker->company(),
        'statement'=>$this->faker->company(),
        'question'=>$this->faker->company(),
        'result'=>$this->faker->company(),
        'clue'=>$this->faker->company(),
        'image'=>$this->faker->company(),
        ];
    }
}
