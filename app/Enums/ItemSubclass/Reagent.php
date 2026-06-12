<?php

declare(strict_types=1);

namespace App\Enums\ItemSubclass;

enum Reagent: int
{
    case Reagent = 0;

    public function label(): string
    {
        return match ($this) {
            self::Reagent => 'Reagent',
        };
    }
}
