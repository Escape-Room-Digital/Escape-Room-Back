<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{

  use RefreshDatabase;

    public function test_user_can_login_with_correct_credentials()
    {

        $user = User::factory()->create([
            'password' => bcrypt($password = 'i-love-laravel'),
        ]);

        $response = $this->post(route('loginUser', [
            'email' => $user->email,
            'password' => $password,
        ]));

        $response->assertStatus(200);
        $this->assertAuthenticatedAs($user);
       /*  ->assertJson([
               'status' => true,
                'message' => 'User Logged In Successfully',
            ]); */
       /*  $user = factory(User::class)->create([
            'password' => bcrypt($password = 'i-love-laravel'),
        ]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $password,
        ]);

        $response->assertRedirect('/home');
        $this->assertAuthenticatedAs($user); */
    }

}
