<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
final class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->campany(),
            'status' => Status::ACTIVE,
            'team_id' => Team::factory(),
        ];
    }

    public function inactive(): ProjectFactory
    {
        return $this->state(
            state: fn(array $attributes): array => [
                'status' => Status::INACTIVE,
            ],
        );
    }
}
