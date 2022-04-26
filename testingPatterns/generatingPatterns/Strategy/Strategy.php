<?php

interface Strategy
{
    public function execute();
}

class Strategy1 implements Strategy
{
    public function execute()
    {
        // TODO: Implement execute() method.
        echo 'STRATEGY_1' . PHP_EOL;
    }
}

class Strategy2 implements Strategy
{
    public function execute()
    {
        // TODO: Implement execute() method.
        echo 'STRATEGY_2' . PHP_EOL;
    }
}

class Context
{
    private Strategy $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function execute(): void
    {
        $this->strategy->execute();
    }
}

$strategies = [
    new Context(new Strategy1()),
    new Context(new Strategy2()),
];

foreach ($strategies as $strategy)
{
    $strategy->execute();
}
