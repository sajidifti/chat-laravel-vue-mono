<?php

namespace App\Enums;

enum ParticipantRole: int
{
    case MEMBER = 1;
    case ADMIN = 2;

    public function label(): string
    {
        return match ($this) {
            ParticipantRole::MEMBER => 'Member',
            ParticipantRole::ADMIN => 'Admin',
        };
    }
}