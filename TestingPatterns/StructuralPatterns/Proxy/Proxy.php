<?php

namespace TestingPatterns\StructuralPatterns\Proxy;

class Real
{
    public function method1(): void
    {
        echo __METHOD__ . PHP_EOL;
    }

    public function method2(): void
    {
        echo __METHOD__ . PHP_EOL;
    }
}

class Proxy
{
    private Real $real;

    public function __construct()
    {
        $this->real = new Real();
    }

    public function proxyMethod1(): void
    {
        $this->real->method1();
    }

    public function proxyMethod2(): void
    {
        $this->real->method2();
    }
}

$proxy = new Proxy();
$proxy->proxyMethod1();
$proxy->proxyMethod2();