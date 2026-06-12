<?php

declare(strict_types=1);

namespace App\Enums;

enum ItemQuality: int
{
    case Poor     = 0;
    case Common   = 1;
    case Uncommon = 2;
    case Rare     = 3;
    case Epic     = 4;

    public function label(): string
    {
        return match ($this) {
            self::Poor     => 'Poor',
            self::Common   => 'Common',
            self::Uncommon => 'Uncommon',
            self::Rare     => 'Rare',
            self::Epic     => 'Epic',
        };

    }
}
