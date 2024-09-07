<?php

declare(strict_types=1);

namespace Thuraaung\OtpGenerator;

use Throwable;
use Thuraaung\OtpGenerator\Enums\CaseType;
use Thuraaung\OtpGenerator\Contracts\OtpGeneratorContract;
use Thuraaung\OtpGenerator\Exceptions\OtpGenerationException;

final class OtpGenerator implements OtpGeneratorContract
{
    public function generate(int $length = 6): string
    {
        try {
            $number = random_int(
                min: 0,
                max: intval(str_repeat('9', $length)),
            );
        } catch (Throwable) {
            throw new OtpGenerationException('Failed to generate an OTP codes!');
        }

        return str_shuffle(mb_str_pad(
            string: strval($number),
            length: $length,
            pad_string: strval(rand(0, 1)),
            pad_type: STR_PAD_BOTH,
        ));
    }

    public function generateAlpha(
        int $length = 6,
        CaseType $type = CaseType::MIXED
    ): string {
        $words = '';

        while (count(mb_str_split($words)) < $length) {
            $words .= chr($type->getCharCode());
        }

        return $words;
    }

    public function generateAlphaNumeric(int $length = 6, CaseType $type = CaseType::MIXED): string
    {
        $words = '';

        while (count(mb_str_split($words)) < $length) {
            $asciiCode = rand(1, 0) ? rand(48, 57) : $type->getCharCode();
            $words .= chr($asciiCode);
        }

        return $words;
    }
}
