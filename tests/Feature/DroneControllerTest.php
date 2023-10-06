<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Drone;
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
        $payload = [
            'name' => $this->faker->name,
            'model' => $this->faker->company,
        ];

        Drone::create($payload);

        $this->json('get', 'api/drones')
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure(
                [
                    '*' => [
                        'id',
                        'name',
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

    public function testDroneIsCreatedSuccessfully() {
        $payload = [
            'name' => $this->faker->name,
            'model' => $this->faker->company,
        ];

        $this->json('post', 'api/drones', $payload)
            ->assertStatus(Response::HTTP_CREATED)
            ->assertJsonStructure([
                'id',
                'name',
                'model',
            ]);
        
        $this->assertDatabaseHas('drones', $payload);
    }

}
