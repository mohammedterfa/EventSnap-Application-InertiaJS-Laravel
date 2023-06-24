<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\Projects\Status;
use App\Models\Project;
use App\Models\Team;
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
            'name' => $this->faker->company(),
            'status' => Status::ACTIVE,
            'team_id' => Team::factory(),
        ];
    }

    public function inactive(): ProjectFactory
    {
        return $this->state(
            state: fn (array $attributes): array => [
                'status' => Status::INACTIVE,
            ],
        );
    }
}
