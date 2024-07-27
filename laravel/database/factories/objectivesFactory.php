<?php

namespace Database\Factories;
use App\Models\UserInfo;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\objectives>
 */
class objectivesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'user_info_id' => UserInfo::inRandomOrder()->first()?->id,
                'startDate' => $this->faker->date(), // Use valid date format
                'endDate' => $this->faker->date(),
                'title' => $this->faker->word(),
                'description' => $this->faker->sentence(),
                'done' => false,
        ];
    }
}
