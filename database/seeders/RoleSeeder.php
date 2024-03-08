<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class  RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'admin',
            "guard_name" => "admin"
            ]);
        Role::create([
            'name' => 'organiser',
            "guard_name" => "organiser"
            ]);
        Role::create([
            'name' => 'participant',
            "guard_name" => "participant"
            ]);
    }
}
