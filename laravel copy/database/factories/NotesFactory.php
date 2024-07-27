<?php

namespace Database\Factories;
use App\Models\UserInfo;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notes>
 */
class NotesFactory extends Factory
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
            'content' => $this->faker->paragraph,
            'title' => $this->faker->title,
        ];
    }
}
