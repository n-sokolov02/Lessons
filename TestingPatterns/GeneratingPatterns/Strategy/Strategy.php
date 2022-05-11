<?php

// Суть паттерна: Выделяет какие-то алгоритмы и использует их в базовом классе

namespace TestingPatterns\GeneratingPatterns\Strategy;

interface Strategy
{
    public function makeStrategy();
}

class Strategy1 implements Strategy
{
    public function makeStrategy()
    {
        // TODO: Implement makeStrategy() method.
        echo __CLASS__ . PHP_EOL;
    }
}

class Strategy2 implements Strategy
{
    public function makeStrategy()
    {
        // TODO: Implement makeStrategy() method.
        echo __CLASS__ . PHP_EOL;
    }
}

class MainStrategy
{
    public Strategy $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function run(): void
    {
        $this->strategy->makeStrategy();
    }
}

echo 'STRATEGY_1' . PHP_EOL;
$main_1 = new MainStrategy(new Strategy1());
$main_1->run();

echo PHP_EOL;

echo 'STRATEGY_2' . PHP_EOL;
$main_2 = new MainStrategy(new Strategy2());
$main_2->run();
