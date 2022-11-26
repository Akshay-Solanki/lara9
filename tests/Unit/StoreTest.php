<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Inertia\Testing\AssertableInertia as Assert;


class StoreTest extends TestCase
{

    use RefreshDatabase;
    // public function setUp(): void
    // {
    //     parent::setUp();
    //     $this->withExceptionHandling();
    // }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_authenticated_user_can_visit_store_listing()
    {
        // $this->withoutExceptionHandling();

        $user = User::factory()->create();

        auth()->login($user);

        $response = $this->get('/stores');
        $response->assertStatus(200);
    }

    public function test_guest_user_can_not_visit_store_listing()
    {
        $response = $this->get('/stores');
        $response->assertRedirect();
    }


    public function test_user_can_visit_store_create()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->get('/stores/create');
        $response->assertInertia(fn($page) => $page->component('Store/Create'));
    }
}
