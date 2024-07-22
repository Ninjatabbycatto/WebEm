<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Workplaces;
use App\Models\Teams;
use App\Models\UserInfo;
use App\Models\Departments;
use App\Models\Notes;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //User::factory()->create([
        //    'id' => 1,
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        //    'password' => bcrypt('thelegend27')
        //]);

        //UserInfo::factory()->count(10)->create();
        Workplaces::factory()->count(10)->create();
        Departments::factory()->count(5)->create();
        Teams::factory()->count(10)->create();
        Notes::factory()->count(3000)->create();

        
    }
}
