<?php

declare(strict_types=1);

namespace App\Enums\ItemSubclass;

enum Housing: int
{
    case Decor      = 0;
    case HousingDye = 1;

    public function label(): string
    {
        return match ($this) {
            self::Decor      => 'Decor',
            self::HousingDye => 'Housing Dye',
        };
    }
}
