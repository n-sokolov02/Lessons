<?php

namespace Practice;

class PracticingNamespaces
{
    private string $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class Product extends PracticingNamespaces
{
    public function formatEcho(): string
    {
        return 'This is a nice echo for ' . $this->getName() . PHP_EOL;
    }
}
