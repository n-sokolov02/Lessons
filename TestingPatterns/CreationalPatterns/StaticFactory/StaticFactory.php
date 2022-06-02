<?php

//same as Factory pattern, but another realization

namespace testingPatterns\creationalPatterns\staticFactory;

use Exception;

class StaticFactory
{
    /**
     * @param $input
     * @return FirstFactory|SecondFactory
     * @throws Exception
     */
    public static function chooseFactory($input): FirstFactory|SecondFactory
    {
        if ($input == 'First') {
            return new FirstFactory();
        } elseif ($input == 'Second') {
            return new SecondFactory();
        } else {
            throw new Exception('Unknown Factory. Choose another');
        }
    }
}

class FirstFactory
{
    public function get(): string
    {
        return __CLASS__ . PHP_EOL;
    }
}

class SecondFactory
{
    public function get(): string
    {
        return __CLASS__ . PHP_EOL;
    }
}

function clientCode(): void
{
    echo StaticFactory::chooseFactory('First')->get();
}

clientCode();