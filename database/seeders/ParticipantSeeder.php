<?php

namespace Database\Seeders;

use App\Models\Participant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $participant = Participant::create([
            'name' => "participant",
            'email' => "participant@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
        ])->assignRole("participant");

        $participant->image()->create([
            "imageable_type" => "App\Models\Participant",
            "imageable_id" => $participant->id,
            "path" => "participant_profile.png"
        ]);
    }
}
