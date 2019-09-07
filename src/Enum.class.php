<?php
namespace hellsh;
use ReflectionClass;
use ReflectionException;
abstract class Enum
{
	/**
	 * Returns the value of the constant with the given name or null if it doesn't exist.
	 *
	 * @param string $name The name of the constant. Case sensitive!
	 * @return mixed
	 */
	static function valueOf(string $name)
	{
		return @static::all()[$name];
	}

	/**
	 * Returns an array with all keys and their values of this enum.
	 *
	 * @return array
	 */
	static function all(): array
	{
		return (new ReflectionClass(get_called_class()))->getConstants();
	}

	/**
	 * Returns true if this enum has a constant with the given name.
	 *
	 * @param string $name The name of the constant. Case sensitive!
	 * @return boolean
	 */
	static function validateName(string $name): bool
	{
		return array_key_exists($name, static::all());
	}

	/**
	 * Returns true if this enum has a constant with the given value.
	 *
	 * @param mixed $value
	 * @return boolean
	 */
	static function validateValue($value): bool
	{
		return in_array($value, static::all());
	}
}
