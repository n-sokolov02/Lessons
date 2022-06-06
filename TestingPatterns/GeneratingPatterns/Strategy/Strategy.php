<?php

// Суть паттерна: Выделяет какие-то алгоритмы и использует их в базовом классе

namespace TestingPatterns\GeneratingPatterns\Strategy;

trait GetOutputOfMakeStrategy
{
    public function makeStrategy(): string
    {
        return __CLASS__ . PHP_EOL;
    }
}

interface StrategyInterface
{
    public function makeStrategy(): string;
}

class Strategy1 implements StrategyInterface
{
    use GetOutputOfMakeStrategy;
}

class Strategy2 implements StrategyInterface
{
    use GetOutputOfMakeStrategy;
}

class BaseStrategy
{
    public StrategyInterface $strategy;

    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function chooseAndExecuteStrategy(): void
    {
        echo $this->strategy->makeStrategy();
    }
}

$baseStrategy = new BaseStrategy(new Strategy2());
$baseStrategy->chooseAndExecuteStrategy();