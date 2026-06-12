<?php

declare(strict_types=1);

namespace App\Enums\ItemSubclass;

enum Profession: int
{
    case Blacksmithing  = 0;
    case Leatherworking = 1;
    case Alchemy        = 2;
    case Herbalism      = 3;
    case Cooking        = 4;
    case Mining         = 5;
    case Tailoring      = 6;
    case Engineering    = 7;
    case Enchanting     = 8;
    case Fishing        = 9;
    case Skinning       = 10;
    case Jewelcrafting  = 11;
    case Inscription    = 12;

    public function label(): string
    {
        return match ($this) {
            self::Blacksmithing  => 'Blacksmithing',
            self::Leatherworking => 'Leatherworking',
            self::Alchemy        => 'Alchemy',
            self::Herbalism      => 'Herbalism',
            self::Cooking        => 'Cooking',
            self::Mining         => 'Mining',
            self::Tailoring      => 'Tailoring',
            self::Engineering    => 'Engineering',
            self::Enchanting     => 'Enchanting',
            self::Fishing        => 'Fishing',
            self::Skinning       => 'Skinning',
            self::Jewelcrafting  => 'Jewelcrafting',
            self::Inscription    => 'Inscription',
        };
    }
}
