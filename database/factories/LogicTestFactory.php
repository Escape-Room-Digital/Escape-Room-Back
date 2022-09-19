<?php

namespace Database\Factories;

use App\Models\LogicTest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class logicTestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //

            LogicTest::factory()->create(['name' =>'El caracol que cayó en el pozo','statement'=>'Un caracol cayó en un pozo de 15 metros. Cada día logra subir 3 metros, pero cada noche vuelve a caer 2.','question'=>'¿Cuánto tiempo demorará el caracol en salir del pozo?',
              'result'=>'15 días.','clue'=>'piensa cuantos metros sube al día','image'=>'https://www.univision.com/proxy/api/cached/picture?href=https%3A%2F%2Fuvn-brightspot.s3.amazonaws.com%2Fassets%2Fvixes%2Fbtg%2Facertijo-caracol-2.jpg&width=0&height=0&ratio_width=1240&ratio_height=698&format=webp',]),

              LogicTest::factory()->create(['name' =>'El caracol que cayó en el pozo','statement'=>'Un caracol cayó en un pozo de 15 metros. Cada día logra subir 3 metros, pero cada noche vuelve a caer 2.','question'=>'¿Cuánto tiempo demorará el caracol en salir del pozo?',
              'result'=>'15 días.','clue'=>'piensa cuantos metros sube al día','image'=>'https://www.univision.com/proxy/api/cached/picture?href=https%3A%2F%2Fuvn-brightspot.s3.amazonaws.com%2Fassets%2Fvixes%2Fbtg%2Facertijo-caracol-2.jpg&width=0&height=0&ratio_width=1240&ratio_height=698&format=webp',]),

            LogicTest::factory()->create(['name' =>'El tigre que cayó en el pozo','statement'=>'Un caracol cayó en un pozo de 15 metros. Cada día logra subir 3 metros, pero cada noche vuelve a caer 2.','question'=>'¿Cuánto tiempo demorará el caracol en salir del pozo?',
              'result'=>'15 días.','clue'=>'piensa cuantos metros sube al día','image'=>'https://www.univision.com/proxy/api/cached/picture?href=https%3A%2F%2Fuvn-brightspot.s3.amazonaws.com%2Fassets%2Fvixes%2Fbtg%2Facertijo-caracol-2.jpg&width=0&height=0&ratio_width=1240&ratio_height=698&format=webp',])

            
        ];
    }
}
