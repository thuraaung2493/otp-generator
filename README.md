# A Simple OTP Generator

## Installation

```bash
composer require thuraaung2493/otp-generator@dev
```

## Usage

```php

// Facades
use Thuraaung\OtpGenerator\Facades\OtpGenerator

OtpGenerator::generate(); // 123456

// Or

use Thuraaung\OtpGenerator\OtpGenerator;

$generator = new OtpGenerator();
$generator->generate(); // 123456
```

## Test

```bash
  composer test
```

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
