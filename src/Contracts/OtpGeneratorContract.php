<?php

declare(strict_types=1);

namespace Thuraaung\OtpGenerator\Contracts;

interface OtpGeneratorContract
{
    public function generate(): string;
}
