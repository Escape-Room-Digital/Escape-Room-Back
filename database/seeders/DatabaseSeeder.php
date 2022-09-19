<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Logictest;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

       Logictest::factory()->create(
        ['name'=>'El caracol que cayó en el pozo',
        'statement'=>'Un caracol cayó en un pozo de 15 metros. Cada día logra subir 3 metros, pero cada noche vuelve a caer 2.',
        'question'=>'¿Cuánto tiempo demorará el caracol en salir del pozo?',
        'result'=>'15 días',
        'clue'=>'¿cuantos metros sube por dia?',
        'image'=>'https://demascotas.info/wp-content/uploads/2021/07/pexels-capriauto-8154117-scaled-e1625822522143.jpg',]);
      
        Logictest::factory(1)->create();

    }
}
