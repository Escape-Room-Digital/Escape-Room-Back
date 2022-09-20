<?php

namespace Tests\Feature\Api;

use App\Models\Logictest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LogictestCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_check_If_Logictests_Are_Listed_In_Json_File(){
      
      Logictest::factory(2)->create();

      $response = $this->get(route('logictestApi'));

      $response->assertStatus(200)
        ->assertJsonCount(2);

    }

    public function test_check_If_Logictests_Are_deleted_In_Json_File(){

      Logictest::factory(2)->create();

      $response = $this->get(route('logictestApi'));
      $response->assertStatus(200)
        ->assertJsonCount(2);

      $response = $this->delete(route('destroylogictestApi', 1));
      
      $response = $this->get(route('logictestApi'));
      $response->assertStatus(200)
        ->assertJsonCount(1);

    }

      public function test_check_if_a_logictest_can_be_created(){
 
      $response=$this->post(route('storelogictestApi',[
            'name'=>'name',
            'statement'=>'statement',
            'question'=>'question',
            'result'=>'result',
            'clue'=>'clue',
            'image'=> 'image',
      ]));
 
      $response = $this->get(route('logictestApi'));
      $response->assertStatus(200)
        ->assertJsonCount(1);
 
    }

    public function test_check_if_a_logictest_can_be_updated(){
 
      $logictest = Logictest::factory()->create();
      $response = $this->get(route('logictestApi'));
      $response->assertStatus(200)
        ->assertJsonCount(1);

    //   $response = $this->patch(route('updateEvent', $event->id), [
    //     'name' => 'updated name',
    //     'description' => 'updated description',
    //     'spaces' => '20',
    //     'image' => 'updated image'
    // ]);

    $response=$this->patch(route('updateLogictest', $logictest->id), [
      'name'=>'Gato',
      'statement'=>'statement',
      'question'=>'question',
      'result'=>'result',
      'clue'=>'clue',
      'image'=> 'image',
]);

    $this->assertEquals('Gato', Logictest::first()->name);
 
    }

    public function test_check_if_a_logictest_can_be_show(){

    $logictest = Logictest::factory()->create(
      // [
      // 'name'=>'name',
      // 'statement'=>'statement',
      // 'question'=>'question',
      // 'result'=>'result',
      // 'clue'=>'clue',
      // 'image'=> 'image',
      // ]
    );
    $this->assertCount(1, Logictest::all());
    
    $response=$this->get(route('showlogictestApi', $logictest->id));
        $response->assertStatus(200)->assertSee("hola")->assertJsonCount(1);
  }


}
