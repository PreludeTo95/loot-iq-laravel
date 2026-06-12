<?php

declare(strict_types=1);

namespace App\Enums\ItemSubclass;

enum Recipe: int
{
    case Book           = 0;
    case Leatherworking = 1;
    case Tailoring      = 2;
    case Engineering    = 3;
    case Blacksmithing  = 4;
    case Cooking        = 5;
    case Alchemy        = 6;
    case FirstAid       = 7;
    case Enchanting     = 8;
    case Fishing        = 9;
    case Jewelcrafting  = 10;
    case Inscription    = 11;

    public function label(): string
    {
        return match ($this) {
            self::Book           => 'Book',
            self::Leatherworking => 'Leatherworking',
            self::Tailoring      => 'Tailoring',
            self::Engineering    => 'Engineering',
            self::Blacksmithing  => 'Blacksmithing',
            self::Cooking        => 'Cooking',
            self::Alchemy        => 'Alchemy',
            self::FirstAid       => 'First Aid',
            self::Enchanting     => 'Enchanting',
            self::Fishing        => 'Fishing',
            self::Jewelcrafting  => 'Jewelcrafting',
            self::Inscription    => 'Inscription',
        };
    }
}
