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


}
