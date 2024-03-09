<?php

namespace App\Actions;

use App\Models\Admin;
use App\Models\Organiser;
use App\Models\Participant;
use App\Traits\HasImage;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use PharIo\Manifest\InvalidEmailException;

class CreateUser
{
    use HasImage;

    public function __construct(public Admin       $admin,
                                public Participant $participant,
                                public Organiser   $organiser)
    {}

    public function handle($userInfo)
    {
        $role = $userInfo["role"];
        $userModel = $this->UserModel($role);

        if ($userModel->whereEmail($userInfo["email"])->first()) {
            throw new InvalidEmailException($userInfo["email"] . "already taken");
        }

        $user = $userModel->create([
            'name' => $userInfo["name"],
            'email' => $userInfo["email"],
            'password' => Hash::make($userInfo["password"]),
        ])->assignRole($role);
        $this->createImage($user, $userInfo["avatar"]);

        event(new Registered($user));
        auth($role)->login($user);

        return $this->redirectTo($role);
    }

    private function UserModel($role)
    {
        return match ($role) {
            "admin" => $this->admin,
            "participant" => $this->participant,
            "organiser" => $this->organiser,
            default => false,
        };
    }

    private function redirectTo($role)
    {
        return match ($role) {
            "admin" => "/dashboard",
            "participant" => "/",
            "organiser" => "/organiser/events",
            default => false,
        };
    }
}
