<?php

namespace Tests\Feature;

<<<<<<< HEAD
use Illuminate\Foundation\Testing\RefreshDatabase;
=======
// use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> danhmuc_list
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
<<<<<<< HEAD
     *
     * @return void
     */
    public function test_example()
=======
     */
    public function test_the_application_returns_a_successful_response(): void
>>>>>>> danhmuc_list
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
