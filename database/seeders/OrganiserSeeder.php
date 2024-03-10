<?php

namespace Database\Seeders;

use App\Models\Organiser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class OrganiserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $organiser = Organiser::create([
            'name' => "organiser",
            'email' => "organiser@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
        ])->assignRole("organiser");
        $organiser->image()->create([
            "path" => "organiser_profile.png",
            "imageable_type" => "App\Models\Organiser",
            "imageable_id" => $organiser->id,
        ]);

    }
}
