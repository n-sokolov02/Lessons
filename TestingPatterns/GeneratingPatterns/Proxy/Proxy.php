<?php

namespace testingPatterns\Proxy;

interface runOperation
{
    public function operation1();

    public function operation2();
}

class RealClass implements runOperation
{
    public function operation1()
    {
        echo 'RealClass operation 1' . PHP_EOL;
    }

    public function operation2()
    {
        echo 'RealClass operation 2' . PHP_EOL;
    }
}

class ProxyClass
{
    protected RealClass $class;

    public function __construct()
    {
        $this->class = new RealClass();
    }

    public function runOperation1(): void
    {
        $this->class->operation1();
    }

    public function runOperation2(): void
    {
        $this->class->operation2();
    }
}

$proxy = new ProxyClass();
$proxy->runOperation1();
$proxy->runOperation2();
