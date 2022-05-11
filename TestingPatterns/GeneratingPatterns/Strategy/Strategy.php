<?php

// Суть паттерна: Выделяет какие-то алгоритмы и использует их в базовом классе

interface StrategyProcess
{
    public function getProduct();
}

class Strategy1 implements StrategyProcess
{
    public function getProduct()
    {
        // TODO: Implement getProduct() method.
        echo 'Updating the product according to STRATEGY_1..' . PHP_EOL;
    }
}

class Strategy2 implements StrategyProcess
{
    public function getProduct()
    {
        // TODO: Implement getProduct() method.
        echo 'Updating the product according to STRATEGY_2..' . PHP_EOL;
    }
}

class BaseClass
{
    private StrategyProcess $process;

    public function __construct(StrategyProcess $strategyProcess)
    {
        $this->process = $strategyProcess;
    }

    public function run(): void
    {
        $this->process->getProduct();
    }
}

$strategy = new BaseClass(new Strategy1());
$strategy->run();

$strategy = new BaseClass(new Strategy2());
$strategy->run();
