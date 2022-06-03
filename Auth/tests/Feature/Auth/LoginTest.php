<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Post;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $data = [
            'email' => $this->faker->sentence,
            'password' => $this->faker->paragraph
        ];
        $this->get(route('auth.login'), $data)
            ->assertStatus(200);


    }
}