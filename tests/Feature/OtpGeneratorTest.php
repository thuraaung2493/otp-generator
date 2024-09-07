<?php

declare(strict_types=1);

use Thuraaung\OtpGenerator\Enums\CaseType;
use Thuraaung\OtpGenerator\OtpGenerator;

it('can create an otp generator', function (): void {
    $generator = new OtpGenerator();

    expect($generator)
        ->toBeInstanceOf(OtpGenerator::class);

    expect(OtpGenerator::class)
        ->toHaveMethod('generate');
});

it('can generate numbers only', function (): void {
    $generator = new OtpGenerator();

    expect($generator->generate())
        ->toBeString()
        ->toBeNumeric()
        ->toHaveLength(6);

    expect($generator->generate(18))
        ->toBeString()
        ->toBeNumeric()
        ->toHaveLength(18);
});

it('can generate alphabets only', function (): void {
    $generator = new OtpGenerator();

    expect($generator->generateAlpha())
        ->toBeString()
        ->toBeAlpha()
        ->toHaveLength(6)
        ->dump();

    expect($generator->generateAlpha(8))
        ->toBeString()
        ->toBeAlpha()
        ->toHaveLength(8);

    expect($generator->generateAlpha(8, CaseType::LOWERCASE))
        ->toBeString()
        ->toBeAlpha()
        ->toHaveLength(8);

    expect($generator->generateAlpha(8, CaseType::UPPERCASE))
        ->toBeString()
        ->toBeAlpha()
        ->toHaveLength(8);
});

it('can generate alpha numeric codes', function (): void {
    $generator = new OtpGenerator();

    expect($generator->generateAlphaNumeric())
        ->toBeString()
        ->toBeAlphaNumeric()
        ->toHaveLength(6)
        ->dump();

    expect($generator->generateAlphaNumeric(8))
        ->toBeString()
        ->toBeAlphaNumeric()
        ->toHaveLength(8);

    expect($generator->generateAlphaNumeric(8, CaseType::LOWERCASE))
        ->toBeString()
        ->toBeAlphaNumeric()
        ->toHaveLength(8);

    expect($generator->generateAlphaNumeric(8, CaseType::UPPERCASE))
        ->toBeString()
        ->toBeAlphaNumeric()
        ->toHaveLength(8);
});
