<?php

// Суть паттерна: Полностью скрыть реализацию реального класса. Заменяет обращения к реальному классу через посредника

namespace testingPatterns\Proxy;

class Real
{
    public function method1(): string
    {
        return __METHOD__ . PHP_EOL;
    }

    public function method2(): string
    {
        return __METHOD__ . PHP_EOL;
    }
}

class Proxy
{
    public Real $real;

    public function __construct()
    {
        $this->real = new Real();
    }

    public function proxyMethod1(): void
    {
        echo $this->real->method1();
    }

    public function proxyMethod2(): void
    {
        echo $this->real->method2();
    }
}

$proxy = new Proxy();
$proxy->proxyMethod1();
$proxy->proxyMethod2();
