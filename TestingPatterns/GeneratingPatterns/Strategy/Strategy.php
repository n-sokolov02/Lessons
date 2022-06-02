<?php

// Суть паттерна: Выделяет какие-то алгоритмы и использует их в базовом классе

namespace TestingPatterns\GeneratingPatterns\Strategy;

interface Strategy
{
    public function get(): string;
}

class Strategy1 implements Strategy
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return __CLASS__ . PHP_EOL;
    }
}

class Strategy2 implements Strategy
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return __CLASS__ . PHP_EOL;
    }
}

class MainStrategy
{
    public Strategy $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function makeStrategy(): void
    {
        echo $this->strategy->get();
    }
}

$mainStrategy = new MainStrategy(new Strategy1());
$mainStrategy->makeStrategy();

$mainStrategy = new MainStrategy(new Strategy2());
$mainStrategy->makeStrategy();