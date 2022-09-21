<?php

namespace Tests\Feature\Api;

use App\Models\Codeeditor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CodeeditorTest extends TestCase
{
    use RefreshDatabase;

    public function test_check_If_Codeeditors_Are_Listed_In_Json_File(){
      
      Codeeditor::factory(2)->create();

      $response = $this->get(route('codeeditorApi'));

      $response->assertStatus(200)
        ->assertJsonCount(2);

    }

    public function test_check_If_Codeeditor_Are_deleted_In_Json_File(){

      Codeeditor::factory(2)->create();

      $response = $this->get(route('codeeditorApi'));
      $response->assertStatus(200)
        ->assertJsonCount(2);

      $response = $this->delete(route('destroycodeeditorApi', 1));
      
      $response = $this->get(route('codeeditorApi'));
      $response->assertStatus(200)
        ->assertJsonCount(1);

    }

    public function test_check_if_a_codeeditor_can_be_updated(){
 
        $codeeditor = Codeeditor::factory()->create();
        $response = $this->get(route('codeeditorApi'));
        $response->assertStatus(200)
          ->assertJsonCount(1);
  
      $response=$this->patch(route('updatecodeeditorApi', $codeeditor->id), [
        'name'=>'Gato',
        'statement'=>'statement',
        'result'=>'result'      
  ]);
  
      $this->assertEquals('Gato', Codeeditor::first()->name);
   
      }

}
