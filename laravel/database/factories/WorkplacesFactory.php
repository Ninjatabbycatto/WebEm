<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Workplaces;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Workplaces>
 */
class WorkplacesFactory extends Factory
{
    protected $model = Workplaces::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //

            'name' => $this->faker->company, // Generates a random company name
            'manager_id' => User::factory(), // Creates a new user or references an existing one
            'team_id' => $this->faker->numberBetween(1, 400),
            'announcement_id' => $this->faker->numberBetween(1, 400),
            //'team_id' => Team::factory(), // Creates a new team or references an existing one
            //'announcement_id' => Announcement::factory(),
        ];
    }
}
