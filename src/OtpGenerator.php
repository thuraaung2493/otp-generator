<?php

declare(strict_types=1);

namespace Thuraaung\OtpGenerator;

use Throwable;
use Thuraaung\OtpGenerator\Contracts\OtpGeneratorContract;
use Thuraaung\OtpGenerator\Exceptions\OtpGenerationException;

final class OtpGenerator implements OtpGeneratorContract
{
    public function generate(): string
    {
        try {
            $number = random_int(
                min: 000_000,
                max: 999_999,
            );
        } catch (Throwable $exception) {
            throw new OtpGenerationException('Failed to generate an OTP codes!');
        }

        return mb_str_pad(
            string: strval($number),
            length: 6,
            pad_string: '0',
            pad_type: STR_PAD_LEFT,
        );
    }
}
