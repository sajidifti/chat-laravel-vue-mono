<?php

namespace App\Enums;

enum MessageType: int
{
    case TEXT = 1;
    case IMAGE = 2;
    case FILE = 3;
    case SYSTEM = 4;

    public function label(): string
    {
        return match ($this) {
            MessageType::TEXT => 'Text',
            MessageType::IMAGE => 'Image',
            MessageType::FILE => 'File',
            MessageType::SYSTEM => 'System',
        };
    }
}
