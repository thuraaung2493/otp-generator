<?php

declare(strict_types=1);

namespace Thuraaung\OtpGenerator;

use Illuminate\Support\ServiceProvider;
use Thuraaung\OtpGenerator\Contracts\OtpGeneratorContract;

final class PackageServiceProvider extends ServiceProvider
{
    /**
     * @var array<string, string>
     */
    public $bindings = [
        OtpGeneratorContract::class => OtpGenerator::class,
    ];
}
