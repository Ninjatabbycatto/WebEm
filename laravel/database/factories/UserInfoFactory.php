<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserInfo;
use App\Models\Workplaces;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserInfo>
 */
class UserInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            //
            'user_auth' => User::factory(),
            'type' => $this->faker->numberBetween(0,1),
            'firstName' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'age' => $this->faker->numberBetween(20, 60),
            'gender' => $this->faker->firstNameMale(),
        ];
    }
    
}
