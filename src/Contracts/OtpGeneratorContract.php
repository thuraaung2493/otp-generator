<?php

declare(strict_types=1);

namespace Thuraaung\OtpGenerator\Contracts;

use Thuraaung\OtpGenerator\Enums\CaseType;

interface OtpGeneratorContract
{
    public function generate(int $length = 6): string;

    public function generateAlpha(int $length = 6, CaseType $type = CaseType::MIXED): string;

    public function generateAlphaNumeric(int $length = 6, CaseType $type = CaseType::MIXED): string;
}
