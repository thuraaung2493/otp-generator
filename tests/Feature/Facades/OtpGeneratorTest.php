<?php

declare(strict_types=1);

use Thuraaung\OtpGenerator\Facades\OtpGenerator;

it('can create an otp generator', function (): void {
    expect(OtpGenerator::generate())
        ->toBeString()
        ->toHaveLength(6);
});
