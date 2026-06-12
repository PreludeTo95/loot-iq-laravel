<?php

declare(strict_types=1);

namespace App\Enums\ItemSubclass;

enum Miscellaneous: int
{
    case Junk           = 0;
    case Reagent        = 1;
    case CompanionPets  = 2;
    case Holiday        = 3;
    case Other          = 4;
    case Mount          = 5;
    case MountEquipment = 6;

    public function label(): string
    {
        return match ($this) {
            self::Junk           => 'Junk',
            self::Reagent        => 'Reagent',
            self::CompanionPets  => 'Companion Pets',
            self::Holiday        => 'Holiday',
            self::Other          => 'Other',
            self::Mount          => 'Mount',
            self::MountEquipment => 'Mount Equipment',
        };
    }
}
