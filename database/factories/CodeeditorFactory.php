<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class CodeeditorFactory extends Factory
{
    
    public function definition()
    {
        return [
            'name'=>$this->faker->company(),
            'statement'=>$this->faker->company(),
            'result'=>$this->faker->company(),
            
        ];
    }
}
