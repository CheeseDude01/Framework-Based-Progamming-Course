<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Faction;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Characters>
 */
class CharactersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'bio' => fake()->realText(500),
            'skill' => fake()->numberBetween(0, 100),
            'faction_id' => Faction::inRandomOrder()->first()->id,
        ];
    }
}
