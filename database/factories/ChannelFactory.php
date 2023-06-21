<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Channel>
 */
class ChannelFactory extends Factory
{

    protected $model = Channel::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'project_id' => Project::factory(),
        ];
    }
}
