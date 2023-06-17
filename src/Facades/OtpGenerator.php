<?php

declare(strict_types=1);

namespace Thuraaung\OtpGenerator\Facades;

use Illuminate\Support\Facades\Facade;
use Thuraaung\OtpGenerator\OtpGenerator as BaseOtpGenerator;

/**
 * @method static string generate()
 *
 * @see BaseOtpGenerator
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
