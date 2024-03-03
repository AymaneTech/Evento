<?php

namespace App\Models;

use App\Enums\BookingType;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
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
            "title" => $title,
            "slug" => SlugService::createSlug(Event::class, "slug", $title),
            "description" => $faker->paragraph,
            "numberOfSeats" => $faker->numberBetween(12, 100),
            "price" => $faker->numberBetween(30, 400),
            "date" => $faker->dateTime(),
            "isFull" => false,
            "bookingType" => BookingType::AUTOMATIC,
            "location" => $faker->address,
        ];
    }
}
