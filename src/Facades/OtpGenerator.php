<?php

declare(strict_types=1);

namespace Thuraaung\OtpGenerator\Facades;

use Illuminate\Support\Facades\Facade;
use Thuraaung\OtpGenerator\Enums\CaseType;
use Thuraaung\OtpGenerator\OtpGenerator as BaseOtpGenerator;

/**
 * @method static string generate(int $length = 6)
 * @method static string generateAlpha(int $length = 6, CaseType $type = CaseType::MIXED)
 * @method static string generateAlphaNumeric(int $length = 6, CaseType $type = CaseType::MIXED)
 *
 * @see Thuraaung\OtpGenerator\OtpGenerator
 */
final class OtpGenerator extends Facade
{
    /**
     * @return class-string
     */
    protected static function getFacadeAccessor(): string
    {
        return BaseOtpGenerator::class;
    }
}
