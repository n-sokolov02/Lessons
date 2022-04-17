<?php

declare(strict_types=1);

namespace testingPatterns\creationalPatterns\staticFactory;

use http\Exception\InvalidArgumentException;

interface Formatter
{
    public static function format(string $input): string;
}

final class StaticFactory
{
    /**
     * @param string $type
     * @return Formatter
     */
    public static function factory(string $type): Formatter
    {
        if ($type == 'number')
        {
            return new FormatNumber();
        } elseif ($type == 'string')
        {
            return new FormatString();
        }

        throw new InvalidArgumentException('Unknown format given');
    }
}

class FormatNumber implements Formatter
{
    /**
     * @param string $input
     * @return string
     */
    public static function format(string $input): string
    {
        // TODO: Implement format() method.
        return number_format((int) $input);
    }
}

class FormatString implements Formatter
{
    /**
     * @param string $input
     * @return string
     */
    public static function format(string $input): string
    {
        // TODO: Implement format() method.
        return $input;
    }
}

$factory = StaticFactory::factory('number');
var_dump($factory);
