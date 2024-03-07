<?php

namespace App\Enums;

enum UserType: string
{
    case ORGANISER = "organiser";
    case PARTICIPANT = "participant";
    case ADMIN = "admin";

    public function redirectTo()
    {
        return match ($this) {
            UserType::ADMIN => "/dashboard",
            UserType::ORGANISER => "/organiser/events",
            UserType::PARTICIPANT => "/",
        };
    }

}
