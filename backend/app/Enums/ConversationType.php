<?php

namespace App\Enums;

enum ConversationType: int
{
    case PRIVATE = 0;
    case GROUP = 1;

    public function label(): string
    {
        return match ($this) {
            ConversationType::PRIVATE => 'Private',
            ConversationType::GROUP => 'Group',
        };
    }
}
