<?php

namespace LaravelLiberu\Rememberable\Exceptions;

use InvalidArgumentException;

class Rememberable extends InvalidArgumentException
{
    public static function missingKey(string $key): self
    {
        return new self("The provided key '{$key}' is missing from rememberableKeys");
    }
}
