<?php

// Суть паттерна: Полностью скрыть реализацию реального класса. Заменяет обращения к реальному классу через посредника

namespace testingPatterns\Proxy;

class Real
{
    public function method1(): void
    {
        echo 'METHOD_1' . PHP_EOL;
    }

    public function method2(): void
    {
        echo 'METHOD_2' . PHP_EOL;
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

