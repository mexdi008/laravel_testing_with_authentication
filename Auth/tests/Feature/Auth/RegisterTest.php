<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
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
            'name' => $this->faker->sentence,
            'email' => $this->faker->sentence,
            'password' => $this->faker->paragraph
        ];
        $this->get(route('auth.register'), $data)
            ->assertStatus(200);

    }
}