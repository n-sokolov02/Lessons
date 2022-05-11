<?php

//same as Factory pattern, but another realization

declare(strict_types=1);

namespace testingPatterns\creationalPatterns\staticFactory;

interface Formatter
{
    public function format(): void;
}

class StaticFactory
{
    public static function chooseFormat($input): Formatter
    {
        if ($input == 'FormatHTML') {
            return new FormatHTML();
        } else {
            return new FormatString();
        }
    }
}

class FormatHTML implements Formatter
{
    public function format(): void
    {
        // TODO: Implement format() method.
        echo '<b> Text </b>' . PHP_EOL;
    }
}

class FormatString implements Formatter
{
    public function format(): void
    {
        // TODO: Implement format() method.
        echo 'Text' . PHP_EOL;
    }
}

$instances = ['FormatHTML', 'FormatString'];

foreach ($instances as $instance)
{
    StaticFactory::chooseFormat($instance)->format();
}
