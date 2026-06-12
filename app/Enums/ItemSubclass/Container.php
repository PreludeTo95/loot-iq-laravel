<?php

declare(strict_types=1);

namespace App\Enums\ItemSubclass;

enum Container: int
{
    case Bag               = 0;
    case HerbBag           = 2;
    case EnchantingBag     = 3;
    case EngineeringBag    = 4;
    case GemBag            = 5;
    case MiningBag         = 6;
    case LeatherworkingBag = 7;
    case InscriptionBag    = 8;
    case TackleBox         = 9;
    case CookingBag        = 10;
    case ReagentBag        = 11;

    public function label(): string
    {
        return match ($this) {
            self::Bag               => 'Bag',
            self::HerbBag           => 'Herb Bag',
            self::EnchantingBag     => 'Enchanting Bag',
            self::EngineeringBag    => 'Engineering Bag',
            self::GemBag            => 'Gem Bag',
            self::MiningBag         => 'Mining Bag',
            self::LeatherworkingBag => 'Leatherworking Bag',
            self::InscriptionBag    => 'Inscription Bag',
            self::TackleBox         => 'Tackle Box',
            self::CookingBag        => 'Cooking Bag',
            self::ReagentBag        => 'Reagent Bag',
        };
    }
}
