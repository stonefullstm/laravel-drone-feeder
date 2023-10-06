<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Http\Response;
use Tests\TestCase;

class DroneControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndexReturnsDataInValidFormat() {
        $this->json('get', 'api/drones')
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure(
                [
                    '*' => [
                        'id',
                        'nome',
                        'model',
                        'deliveries' => [
                            '*' => [
                                'id',
                                'latitude',
                                'longitude',
                                'drone_id'
                            ]
                        ]
                    ]
                ]
            );
    }

    public function testUserIsCreatedSuccessfully() {
        $payload = [
            'name' => $this->faker->name,
            'model' => $this->faker->company,
        ];

        $this->json('post', 'api/drones', $payload)
            ->assertStatus(Response::HTTP_CREATED);
        
        $this->assertDatabaseHas('drones', $payload);
    }

}
