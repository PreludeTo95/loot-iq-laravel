<?php

declare(strict_types=1);

namespace App\Enums\ItemSubclass;

enum Gem: int
{
    case Intellect      = 0;
    case Agility        = 1;
    case Strength       = 2;
    case Stamina        = 3;
    case CriticalStrike = 5;
    case Mastery        = 6;
    case Haste          = 7;
    case Versatility    = 8;
    case Other          = 9;
    case MultipleStats  = 10;
    case ArtifactRelic  = 11;

    public function label(): string
    {
        return match ($this) {
            self::Intellect      => 'Intellect',
            self::Agility        => 'Agility',
            self::Strength       => 'Strength',
            self::Stamina        => 'Stamina',
            self::CriticalStrike => 'Critical Strike',
            self::Mastery        => 'Mastery',
            self::Haste          => 'Haste',
            self::Versatility    => 'Versatility',
            self::Other          => 'Other',
            self::MultipleStats  => 'Multiple Stats',
            self::ArtifactRelic  => 'Artifact Relic',
        };
    }
}
