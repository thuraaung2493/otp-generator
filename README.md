# A Simple OTP Generator

## Installation

```bash
composer require thuraaung2493/otp-generator:dev-main
```

## Usage

```php
use Thuraaung\OtpGenerator\OtpGenerator;

$generator = new OtpGenerator();
$generator->generate(); // 123456
```

### Facade

```php
use Thuraaung\OtpGenerator\Facades\OtpGenerator;
use Thuraaung\OtpGenerator\Enums\CaseType;

OtpGenerator::generate(); // 123456
```

**Number Only**

```php
use Thuraaung\OtpGenerator\Facades\OtpGenerator

OtpGenerator::generate(8); // "123456"
OtpGenerator::generate(8); // "12345678"
```

**English Alphabets Only**

```php
use Thuraaung\OtpGenerator\Facades\OtpGenerator

OtpGenerator::generateAlpha(6, CaseType::MIXED); // "pHwmLh"
```

**Alpha Numeric**

```php
use Thuraaung\OtpGenerator\Facades\OtpGenerator

OtpGenerator::generateAlphaNumeric(6, CaseType::MIXED); // "S3I3V1"
```

> Note: Uppercase only => `CaseType::UPPERCASE`, Lowercase only => `CaseType::LOWERCASE`, Mixed(default) => `CaseType::MIXED`

## Test

```bash
  composer test
```

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
