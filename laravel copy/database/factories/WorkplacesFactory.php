<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserInfo;
use App\Models\Workplaces;
use App\Models\Teams;

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
        $manager = UserInfo::factory()->create([
            'type' => 1,  
        ]);

        //$team = Teams::factory()->create([
        //    'workplace' => $this->faker->unique()->numberBetween(1, 10), 
        //]);

        return [
            'name' => $this->faker->company,
            'manager' => $manager->id,
            //'team_id' => $team->id,
        ];

    }
    

    
}
