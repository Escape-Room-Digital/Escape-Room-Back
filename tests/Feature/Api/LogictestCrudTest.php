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



}
