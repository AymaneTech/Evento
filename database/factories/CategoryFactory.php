<?php

namespace Database\Factories;

use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = $this->faker;
        $title = $faker->name;
        return [
            "name" => $title,
            "slug" => SlugService::createSlug(Category::class, "slug", $title),
            "description" => $faker->sentence,
        ];
    }
}
