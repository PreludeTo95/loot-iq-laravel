<?php

declare(strict_types=1);

namespace App\Enums\ItemSubclass;

enum Quest: int
{
    case Quest = 0;

    public function label(): string
    {
        return match ($this) {
            self::Quest => 'Quest',
        };
    }
}
