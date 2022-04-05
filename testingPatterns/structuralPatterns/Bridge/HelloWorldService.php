<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Bridge;

class HelloWorldService extends Service
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return $this->implementation->format('Hello World');
    }
}

