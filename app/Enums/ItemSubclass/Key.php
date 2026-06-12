<?php

declare(strict_types=1);

namespace App\Enums\ItemSubclass;

enum Key: int
{
    case Key = 0;

    public function label(): string
    {
        return match ($this) {
            self::Key => 'Key',
        };
    }
}
