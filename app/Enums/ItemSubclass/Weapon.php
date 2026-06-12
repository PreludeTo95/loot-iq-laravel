<?php

declare(strict_types=1);

namespace App\Enums\ItemSubclass;

enum Weapon: int
{
    case Axe1H         = 0;
    case Axe2H         = 1;
    case Bow           = 2;
    case Gun           = 3;
    case Mace1H        = 4;
    case Mace2H        = 5;
    case Polearm       = 6;
    case Sword1H       = 7;
    case Sword2H       = 8;
    case Warglaives    = 9;
    case Staff         = 10;
    case FistWeapon    = 13;
    case Miscellaneous = 14;
    case Dagger        = 15;
    case Thrown        = 16;
    case Crossbow      = 18;
    case Wand          = 19;

    public function label(): string
    {
        return match ($this) {
            self::Axe1H         => 'Axe',
            self::Axe2H         => 'Axe',
            self::Bow           => 'Bow',
            self::Gun           => 'Gun',
            self::Mace1H        => 'Mace',
            self::Mace2H        => 'Mace',
            self::Polearm       => 'Polearm',
            self::Sword1H       => 'Sword',
            self::Sword2H       => 'Sword',
            self::Warglaives    => 'Warglaives',
            self::Staff         => 'Staff',
            self::FistWeapon    => 'Fist Weapon',
            self::Miscellaneous => 'Miscellaneous',
            self::Dagger        => 'Dagger',
            self::Thrown        => 'Thrown',
            self::Crossbow      => 'Crossbow',
            self::Wand          => 'Wand',
        };
    }
}
