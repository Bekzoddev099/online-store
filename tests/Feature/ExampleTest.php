<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
<<<<<<< HEAD
use Illuminate\Foundation\Testing\RefreshDatabase;
=======
>>>>>>> 1814561 (first commit)
use Tests\TestCase;

class ExampleTest extends TestCase
{
<<<<<<< HEAD
    use RefreshDatabase;
=======
>>>>>>> 1814561 (first commit)
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
