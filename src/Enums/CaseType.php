<?php

declare(strict_types=1);

namespace Thuraaung\OtpGenerator\Enums;

enum CaseType: string
{
    case UPPERCASE = 'uppercase';
    case LOWERCASE = 'lowercase';
    case MIXED = 'mixed';

    public function getCharCode(): int
    {
        return match ($this) {
            self::UPPERCASE => rand(65, 90),
            self::LOWERCASE => rand(97, 122),
            self::MIXED => rand(0, 1) ? rand(97, 122) : rand(65, 90),
        };
    }
}
