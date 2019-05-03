# php-enum

A simple, abstract class to improve your 'enums'.

## Usage

1. `composer require hell-sh/enum:dev-master`.
2. Make your enum(s) extend `hellsh\Enum`:
    ```PHP
    <?php
    namespace MyNamespace;
    use hellsh\Enum;
    final class MyEnum extends Enum
    {
        const ONE = "Eins";
        const TWO = "Zwei";
    }
    ```
3. Enjoy the added methods:
  - `MyEnum::all() : array`
  - `MyEnum::validateName(string $name) : bool`
  - `MyEnum::validateValue($value) : bool`