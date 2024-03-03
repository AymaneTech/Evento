<?php

namespace Database\Factories;

use App\Enums\BookingType;
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
            "description" => $faker->sentence,
            "numberOfSeats" => $faker->numberBetween(40, 100),
            "price" =>  $faker->numberBetween(40, 100),
            "date" => $faker->dateTime,
            "location" => $faker->address,
            "bookingType" => BookingType::AUTOMATIC->value,
            "user_id" => 1,
        ];
    }
}
