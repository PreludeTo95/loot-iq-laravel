<?php

declare(strict_types=1);

namespace App\Enums\ItemSubclass;

enum ItemEnhancement: int
{
    case Head            = 0;
    case Neck            = 1;
    case Shoulder        = 2;
    case Cloak           = 3;
    case Chest           = 4;
    case Wrist           = 5;
    case Hands           = 6;
    case Waist           = 7;
    case Legs            = 8;
    case Feet            = 9;
    case Finger          = 10;
    case Weapon          = 11;
    case TwoHandedWeapon = 12;
    case ShieldOrOffHand = 13;
    case Misc            = 14;

    public function label(): string
    {
        return match ($this) {
            self::Head            => 'Head',
            self::Neck            => 'Neck',
            self::Shoulder        => 'Shoulder',
            self::Cloak           => 'Cloak',
            self::Chest           => 'Chest',
            self::Wrist           => 'Wrist',
            self::Hands           => 'Hands',
            self::Waist           => 'Waist',
            self::Legs            => 'Legs',
            self::Feet            => 'Feet',
            self::Finger          => 'Finger',
            self::Weapon          => 'Weapon',
            self::TwoHandedWeapon => 'Two-Handed Weapon',
            self::ShieldOrOffHand => 'Shield/Off-hand',
            self::Misc            => 'Misc',
        };
    }
}
