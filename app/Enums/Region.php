<?php

declare(strict_types=1);

namespace App\Enums;

enum Region: int
{
    case US     = 1;
    case Europe = 2;
    case Korea  = 3;
    case Taiwan = 4;

    public function label(): string
    {
        return match ($this) {
            self::US     => 'North America',
            self::Europe => 'Europe',
            self::Korea  => 'Korea',
            self::Taiwan => 'Taiwan',
        };
    }

    public function code(): string
    {
        return match ($this) {
            self::US     => 'US',
            self::Europe => 'EU',
            self::Korea  => 'KR',
            self::Taiwan => 'TW',
        };
    }
}
