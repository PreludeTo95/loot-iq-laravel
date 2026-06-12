<?php

declare(strict_types=1);

namespace App\Enums\ItemSubclass;

enum Armor: int
{
    case Miscellaneous = 0;
    case Cloth         = 1;
    case Leather       = 2;
    case Mail          = 3;
    case Plate         = 4;
    case Cosmetic      = 5;
    case Shield        = 6;

    public function label(): string
    {
        return match ($this) {
            self::Miscellaneous => 'Miscellaneous',
            self::Cloth         => 'Cloth',
            self::Leather       => 'Leather',
            self::Mail          => 'Mail',
            self::Plate         => 'Plate',
            self::Cosmetic      => 'Cosmetic',
            self::Shield        => 'Shield',
        };
    }
}
