<?php

declare(strict_types=1);

use Thuraaung\OtpGenerator\Enums\CaseType;
use Thuraaung\OtpGenerator\Facades\OtpGenerator;

it('can create an otp generator', function (): void {
    expect(OtpGenerator::generate())
        ->toBeString()
        ->toHaveLength(6);
});

it('can generate numbers only', function (): void {
    expect(OtpGenerator::generate())
        ->toBeString()
        ->toBeNumeric()
        ->toHaveLength(6);

    expect(OtpGenerator::generate(18))
        ->toBeString()
        ->toBeNumeric()
        ->toHaveLength(18);
});

it('can generate alphabets only', function (): void {
    expect(OtpGenerator::generateAlpha())
        ->toBeString()
        ->toBeAlpha()
        ->toHaveLength(6);

    expect(OtpGenerator::generateAlpha(8))
        ->toBeString()
        ->toBeAlpha()
        ->toHaveLength(8);

    expect(OtpGenerator::generateAlpha(8, CaseType::LOWERCASE))
        ->toBeString()
        ->toBeAlpha()
        ->toHaveLength(8);

    expect(OtpGenerator::generateAlpha(8, CaseType::UPPERCASE))
        ->toBeString()
        ->toBeAlpha()
        ->toHaveLength(8);
});

it('can generate alpha numeric codes', function (): void {
    expect(OtpGenerator::generateAlphaNumeric())
        ->toBeString()
        ->toBeAlphaNumeric()
        ->toHaveLength(6);

    expect(OtpGenerator::generateAlphaNumeric(8))
        ->toBeString()
        ->toBeAlphaNumeric()
        ->toHaveLength(8);

    expect(OtpGenerator::generateAlphaNumeric(8, CaseType::LOWERCASE))
        ->toBeString()
        ->toBeAlphaNumeric()
        ->toHaveLength(8);

    expect(OtpGenerator::generateAlphaNumeric(8, CaseType::UPPERCASE))
        ->toBeString()
        ->toBeAlphaNumeric()
        ->toHaveLength(8);
});
