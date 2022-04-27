<?php

//same as Factory pattern, but another realization

declare(strict_types=1);

namespace testingPatterns\creationalPatterns\staticFactory;

use Exception;

interface Formatter
{
    public function format(): string;
}

class StaticFactory
{
    /**
     * @param $input
     * @return Formatter
     * @throws Exception
     */
    public static function chooseFormat($input): Formatter
    {
        if ($input = 'string')
        {
            return new FormatString();
        } elseif ($input = 'html')
        {
            return new FormatHTML();
        }

        throw new Exception('Unknown format given');
    }
}

class FormatString implements Formatter
{
    public function format(): string
    {
        // TODO: Implement format() method.
        return __CLASS__ . PHP_EOL;
    }
}

class FormatHTML implements Formatter
{
    public function format(): string
    {
        // TODO: Implement format() method.
        return '<b>' . __CLASS__ . '</b>' . PHP_EOL;
    }
}

echo StaticFactory::chooseFormat('string')->format();
