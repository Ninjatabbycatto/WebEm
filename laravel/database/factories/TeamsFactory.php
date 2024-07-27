<?php

namespace Database\Factories;
use App\Models\UserInfo;
use App\Models\Workplaces;
use App\Models\Departments;
use App\Models\Teams;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teams>
 */
class TeamsFactory extends Factory
{
    protected $model = Teams::class;

    public function definition(): array
    {
        $user = UserInfo::where('type', 0)->inRandomOrder()->first();
        return [
            'role' => $this->faker->word, // Adjust as needed
            'desc' => $this->faker->sentence, // Adjust as needed
            'workplace' => Workplaces::inRandomOrder()->first()?->id,
            //'department' => Departments::inRandomOrder()->first()->id,
        ];
    }
    public function configure() {

        //return $this->afterCreating(function (Workplaces $workplaces) { //create users and attach to workplace
        //    $userInfos = UserInfo::factory()->count(10)->create();
        //    $workplaces->users()->attach($userInfos);
        //});

        
        return $this->afterCreating(function (Teams $teams) {
            $userInfos = UserInfo::factory()->count(10)->create();
            $teams->users()->attach($userInfos);

        });
        
    }



    
}
