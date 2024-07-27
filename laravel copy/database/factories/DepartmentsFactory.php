<?php

namespace Database\Factories;

use App\Models\Departments;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departments>
 */
class DepartmentsFactory extends Factory
{
    /** 
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     */
    protected $model = Departments::class;
    public function definition(): array
    {
        
        return [
            //
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->sentence(),

        ];
    }
}
