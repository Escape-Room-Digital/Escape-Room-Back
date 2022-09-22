<?php

namespace Tests\Feature\Api;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_check_If_Users_Are_Listed_In_Json_File(){
      
      User::factory(2)->create();

      $response = $this->get(route('userApi'));

      $response->assertStatus(200)
        ->assertJsonCount(2);

    }
}
