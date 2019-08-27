# php-enum

A simple, abstract class to improve your 'enums'.

## Usage

1. `composer require hell-sh/enum ^1.0`
2. Make your enum(s) extend `hellsh\Enum`:
    ```PHP
    namespace MyNamespace;
    use hellsh\Enum;
    final class MyEnum extends Enum
    {
        const ONE = "Eins";
        const TWO = "Zwei";
    }
    ```
3. Enjoy the added methods:
  - `MyEnum::valueOf(string $name)`
  - `MyEnum::all(): array`
  - `MyEnum::validateName(string $name): bool`
  - `MyEnum::validateValue($value): bool`
