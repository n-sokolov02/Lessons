<?php

use JetBrains\PhpStorm\Pure;

class Customer
{
    protected string $name;

    public function __construct($name) {
        $this->name = $name;
    }

    protected function format(): string {
        return ucwords($this->name);
    }

    #[Pure] public function getName(): string {
        return $this->format() . PHP_EOL;
    }
}

class VIP extends Customer
{
    protected function format(): string {
        return strtoupper($this->name);
    }
}

$bob = new Customer('Bob Allen');
echo $bob->getName();

$alex = new VIP('alex ferguson');
echo $alex->getName();
