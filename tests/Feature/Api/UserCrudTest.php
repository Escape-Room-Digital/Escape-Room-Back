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

     public function test_check_If_User_Are_deleted_In_Json_File(){

      User::factory(2)->create();

      $response = $this->get(route('userApi'));
      $response->assertStatus(200)
        ->assertJsonCount(2);

      $response = $this->delete(route('destroyuserApi', 1));
      
      $response = $this->get(route('userApi'));
      $response->assertStatus(200)
        ->assertJsonCount(1);

    }

    public function test_check_if_a_user_can_be_created(){
 
      $response=$this->post(route('storeuserApi',[
            'name'=>'name',
            'phone'=>'phone',
            'email'=>'email',
            'promo'=>'promo',
            'solution'=>'solution',
            'testdone'=>'testdone',
            'password'=>'password',
      ]));
 
      $response = $this->get(route('userApi'));
      $response->assertStatus(200)
        ->assertJsonCount(1);
 
    }

     public function test_check_if_a_user_can_be_updated(){
 
        $user = User::factory()->create();
        $response = $this->get(route('userApi'));
        $response->assertStatus(200)
          ->assertJsonCount(1);
  
      $response=$this->patch(route('updateuserApi', $user->id), [
            'name'=>'Gato',
            'phone'=>'phone',
            'email'=>'email',
            'promo'=>'promo',
            'solution'=>'solution',
            'testdone'=>'testdone',
            'password'=>'password',    
        ]);
  
      $this->assertEquals('Gato', User::first()->name);
   
      }

      public function test_check_if_a_user_can_be_show(){

        $user = User::factory()->create();
        $this->assertCount(1, User::all());
        
        $response=$this->get(route('showuserApi', $user->id));
            $response->assertStatus(200)->assertSee("name")->assertJsonCount(1);
      }
}
