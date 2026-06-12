<?php

declare(strict_types=1);

namespace App\Enums\ItemSubclass;

enum Consumable: int
{
    case ExplosivesAndDevices = 0;
    case Potions              = 1;
    case Elixirs              = 2;
    case FlasksAndPhials      = 3;
    case FoodAndDrink         = 5;
    case Bandages             = 7;
    case Other                = 8;
    case VantusRunes          = 9;

    public function label(): string
    {
        return match ($this) {
            self::ExplosivesAndDevices => 'Explosives and Devices',
            self::Potions              => 'Potions',
            self::Elixirs              => 'Elixirs',
            self::FlasksAndPhials      => 'Flasks & Phials',
            self::FoodAndDrink         => 'Food & Drink',
            self::Bandages             => 'Bandages',
            self::Other                => 'Other',
            self::VantusRunes          => 'Vantus Runes',
        };
    }
}
