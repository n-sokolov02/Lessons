<?php

//same as Factory pattern, but another realization

declare(strict_types=1);

namespace testingPatterns\creationalPatterns\staticFactory;

use Exception;

interface ObjectModeler
{
    public function getClass(): void;
}

class Factory
{
    /**
     * @param $name
     * @return FormatHTML|FormatString
     * @throws Exception
     */
    public static function chooseModel($name): FormatHTML|FormatString
    {
        if ($name == 'FormatHTML') {
            return new FormatHTML();
        } elseif ($name == 'FormatString') {
            return new FormatString();
        } else {
            throw new Exception('Invalid CLASS_NAME, choose another');
        }
    }
}

class FormatHTML implements ObjectModeler
{
    public function getClass(): void
    {
        // TODO: Implement getClass() method.
        echo __CLASS__ . PHP_EOL;
    }
}

class FormatString implements ObjectModeler
{
    public function getClass(): void
    {
        // TODO: Implement getClass() method.
        echo __CLASS__ . PHP_EOL;
    }
}

$arrayOfFactories = [
    'FormatHTML',
    'FormatString',
    'InvalidFormatForTest',
];

foreach ($arrayOfFactories as $factory)
{
    Factory::chooseModel($factory)->getClass();
}
