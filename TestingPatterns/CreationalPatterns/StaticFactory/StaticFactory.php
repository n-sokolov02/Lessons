<?php

//same as Factory pattern, but another realization

namespace testingPatterns\creationalPatterns\staticFactory;

use Exception;

class MainFactory
{
    /**
     * @param $instance
     * @throws Exception
     */
    public static function chooseFactoryAndExecute($instance): void
    {
        echo $instance->getFactory();
    }
}

class Factory1
{
    public function getFactory(): string
    {
        return __CLASS__ . PHP_EOL;
    }
}

class Factory2
{
    public function getFactory(): string
    {
        return __CLASS__ . PHP_EOL;
    }
}

function getFactory(): void
{
    MainFactory::chooseFactoryAndExecute(new Factory1());
}

getFactory();