<?php

namespace Database\Factories;

use App\Models\Channel;
use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;


class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'icon' => $this->faker->word(),
            'parser' => null,
            'description' => $this->faker->paragraph(),
            'notify' => false,
            'tags' => [],
            'meta'=> [],
            'channel_id' => Channel::factory(),
        ];
    }
}
