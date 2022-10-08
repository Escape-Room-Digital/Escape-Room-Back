<?php

namespace Tests\Feature\Api;

use App\Models\Escaperoom;
use App\Models\Logictest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EscapeRoomTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_check_If_EscapeRooms_Are_Listed_In_Json_File(){
      
        Escaperoom::factory(2)->create();
  
        $response = $this->get(route('escaperoomApi'));
  
        $response->assertStatus(200)
          ->assertJsonCount(2);
  
      }

      public function test_check_If_EscapeRooms_Are_deleted_In_Json_File(){

        Escaperoom::factory(2)->create();
  
        $response = $this->get(route('escaperoomApi'));
        $response->assertStatus(200)
          ->assertJsonCount(2);
  
        $response = $this->delete(route('destroyEscaperoomApi', 1));
        
        $response = $this->get(route('escaperoomApi'));
        $response->assertStatus(200)
          ->assertJsonCount(1);
  
      }

      public function test_check_if_a_EscapeRooms_can_be_created(){
 
        $response=$this->post(route('storeEscapeRoomApi',[
              'name'=>'name',      
        ]));
   
        $response = $this->get(route('escaperoomApi'));
        $response->assertStatus(200)
          ->assertJsonCount(1);
   
      }
    /*   public function test_check_If_LogicTest_Are_Listed_In_EscapeRoom(){

        Logictest::factory(1)->create();

        $response1 = $this->get(route('logictestApi'));
  
        $response1->assertStatus(200)
          ->assertJsonCount(1);

        Escaperoom::factory(1)->create();
  
        $response2 = $this->get(route('escaperoomApi'));
  
        $response2->assertStatus(200)
          ->assertJsonCount(1);

           $response = $this->get(route('myLogicTestsInEscapeRoom', '1', '1'));
  
        $response->assertStatus(200);
        //   ->assertJsonCount(1);

        //$this->assertEquals($response2->id,$response1->escaperoom[0]->id);
   
        $this->assertDatabaseHas('escaperoom_logictest', [
            'logictest_id' => 1,
        ]);
   
          
  
        // $event = Event::factory()->create();
        // $this->assertCount(1, Event::all());
        // $userNoAdmin = User::factory()->create(['isAdmin'=>false]);
        // $this->actingAs($userNoAdmin);
        // $eventPlaces=Event::first()->sub_people;
        // $response = $this->get(route('inscribeEvent', $event->id));
        // $this->assertEquals($eventPlaces +1, Event::first()->sub_people);
  
      } */

}
