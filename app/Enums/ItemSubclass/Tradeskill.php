<?php

declare(strict_types=1);

namespace App\Enums\ItemSubclass;

enum Tradeskill: int
{
    case TradeGoodsObsolete = 0;
    case Parts              = 1;
    case Jewelcrafting      = 4;
    case Cloth              = 5;
    case Leather            = 6;
    case MetalAndStone      = 7;
    case Cooking            = 8;
    case Herb               = 9;
    case Elemental          = 10;
    case Other              = 11;
    case Enchanting         = 12;
    case Inscription        = 16;
    case OptionalReagents   = 18;
    case FinishingReagents  = 19;

    public function label(): string
    {
        return match ($this) {
            self::TradeGoodsObsolete => 'Trade Goods (OBSOLETE)',
            self::Parts              => 'Parts',
            self::Jewelcrafting      => 'Jewelcrafting',
            self::Cloth              => 'Cloth',
            self::Leather            => 'Leather',
            self::MetalAndStone      => 'Metal & Stone',
            self::Cooking            => 'Cooking',
            self::Herb               => 'Herb',
            self::Elemental          => 'Elemental',
            self::Other              => 'Other',
            self::Enchanting         => 'Enchanting',
            self::Inscription        => 'Inscription',
            self::OptionalReagents   => 'Optional Reagents',
            self::FinishingReagents  => 'Finishing Reagents',
        };
    }
}
