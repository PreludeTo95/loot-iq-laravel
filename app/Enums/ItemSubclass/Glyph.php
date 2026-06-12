<?php

declare(strict_types=1);

namespace App\Enums\ItemSubclass;

enum Glyph: int
{
    case Warrior     = 1;
    case Paladin     = 2;
    case Hunter      = 3;
    case Rogue       = 4;
    case Priest      = 5;
    case DeathKnight = 6;
    case Shaman      = 7;
    case Mage        = 8;
    case Warlock     = 9;
    case Monk        = 10;
    case Druid       = 11;
    case DemonHunter = 12;

    public function label(): string
    {
        return match ($this) {
            self::Warrior     => 'Warrior',
            self::Paladin     => 'Paladin',
            self::Hunter      => 'Hunter',
            self::Rogue       => 'Rogue',
            self::Priest      => 'Priest',
            self::DeathKnight => 'Death Knight',
            self::Shaman      => 'Shaman',
            self::Mage        => 'Mage',
            self::Warlock     => 'Warlock',
            self::Monk        => 'Monk',
            self::Druid       => 'Druid',
            self::DemonHunter => 'Demon Hunter',
        };
    }
}
