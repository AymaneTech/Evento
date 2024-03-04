<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Event;
use App\Models\Organiser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Organiser::factory(10);
        Category::factory()
            ->has(Event::factory()
                ->count(4))
            ->count(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
