<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Codeeditor;
use App\Models\Escaperoom;
use App\Models\Logictest;
use App\Models\User;
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
        'question'=>'El Caracol saldrá del pozo en 15 días. ¿Verdadero o Falso?',
        'result'=>false,
        'clue'=>'¿cuantos metros sube por dia?',
        'image'=>'https://demascotas.info/wp-content/uploads/2021/07/pexels-capriauto-8154117-scaled-e1625822522143.jpg',]);

        Logictest::factory()->create(
        ['name'=>'Los tres perros',
        'statement'=>'Rover pesa menos que Fido. Rover pesa más que Boomer. De los tres perros, Boomer es el que menos pesa.',
        'question'=>'Si las dos primeras afirmaciones son verdaderas, la tercera afirmación es',
        'result'=>true,
        'clue'=>'Fido pesa mas que los otros dos perros',
        'image'=>'https://st.depositphotos.com/2166845/4807/i/600/depositphotos_48073787-stock-photo-three-dogs.jpg',]);

        Logictest::factory()->create(
        ['name'=>'Los tres perros',
        'statement'=>'RKingston Mall tiene más tiendas que Galleria. El centro comercial Four Corners tiene menos tiendas que Galleria. El Kingston Mall tiene más tiendas que el Four Corners Mall.',
        'question'=>'Si las dos primeras afirmaciones son verdaderas, la tercera afirmación es',
        'result'=>true,
        'clue'=>'De las dos primeras afirmaciones, sabe que Kingston Mall tiene la mayor cantidad de tiendas, por lo que Kingston Mall tendría más tiendas que Four Corners Mall.',
        'image'=>'https://st.depositphotos.com/2166845/4807/i/600/depositphotos_48073787-stock-photo-three-dogs.jpg',]);
      
        Logictest::factory(0)->create();


        Codeeditor::factory()->create(
            ['name'=>'El caracol que cayó en el pozo',
            'statement'=>'Un caracol cayó en un pozo de 15 metros. Cada día logra subir 3 metros, pero cada noche vuelve a caer 2.',
            
            'result'=>'15 días',
            
            ]);
    
            Codeeditor::factory()->create(
            ['name'=>'El tigre que cayó en el pozo',
            'statement'=>'Un caracol cayó en un pozo de 15 metros. Cada día logra subir 3 metros, pero cada noche vuelve a caer 2.',
            
            'result'=>'15 días',
            ]);
          
            Codeeditor::factory(1)->create();

            User::factory(10)->create();

            Escaperoom::factory(['name'=>'EscapeRoom1',
            ])->create();
            Escaperoom::factory()->create();

    }
}
