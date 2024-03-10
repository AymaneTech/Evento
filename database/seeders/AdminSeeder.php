<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Admin::create([
            'name' => "admin",
            'email' => "admin@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
        ])->assignRole("admin");
        $admin->image()->create([
            "path" => "profile.png",
            "imageable_type" =>  "App\Models\Admin",
            "imageable_id" => $admin->id,
        ]);
    }
}
