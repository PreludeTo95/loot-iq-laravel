<?php

declare(strict_types=1);

namespace App\Enums;

enum ItemClass: int
{
    case Consumable      = 0;
    case Container       = 1;
    case Weapon          = 2;
    case Gem             = 3;
    case Armor           = 4;
    case Reagent         = 5;
    case Tradeskill      = 7;
    case ItemEnhancement = 8;
    case Recipe          = 9;
    case Quest           = 12;
    case Key             = 13;
    case Miscellaneous   = 15;
    case Glyph           = 16;
    case Profession      = 19;
    case Housing         = 20;

    public function label(): string
    {
        return match ($this) {
            self::Consumable      => 'Consumable',
            self::Container       => 'Container',
            self::Weapon          => 'Weapon',
            self::Gem             => 'Gem',
            self::Armor           => 'Armor',
            self::Reagent         => 'Reagent',
            self::Tradeskill      => 'Tradeskill',
            self::ItemEnhancement => 'Item Enhancement',
            self::Recipe          => 'Recipe',
            self::Quest           => 'Quest',
            self::Key             => 'Key',
            self::Miscellaneous   => 'Miscellaneous',
            self::Glyph           => 'Glyph',
            self::Profession      => 'Profession',
            self::Housing         => 'Housing',
        };
    }
}
