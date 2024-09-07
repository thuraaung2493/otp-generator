<?php

declare(strict_types=1);

use Thuraaung\OtpGenerator\OtpGenerator;

it('can create an otp generator', function (): void {
    $generator = new OtpGenerator();

    expect($generator)
        ->toBeInstanceOf(OtpGenerator::class);

    expect(OtpGenerator::class)
        ->toHaveMethod('generate')
        ->and($generator->generate())
        ->toBeString()
        ->toHaveLength(6);
});
