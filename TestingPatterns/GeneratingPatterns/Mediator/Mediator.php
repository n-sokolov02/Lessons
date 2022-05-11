<?php

namespace testingPatterns\Mediator;

interface Mediator
{
    public function notify(object $sender, string $event): void;
}

class BaseComponent
{
    protected Mediator $mediator;

    public function __construct(Mediator $mediator = null)
    {
        $this->mediator = $mediator;
    }

    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }
}

class Component1 extends BaseComponent
{
    public function doA(): void
    {
        echo 'Component 1 does A' . PHP_EOL;
        $this->mediator->notify($this,'A');
    }

    public function doB(): void
    {
        echo 'Component 1 does B' . PHP_EOL;
        $this->mediator->notify($this,'C');
    }
}

class Component2 extends BaseComponent
{
    public function doC(): void
    {
        echo 'Component 2 does C' . PHP_EOL;
        $this->mediator->notify($this,'C');
    }

    public function doD(): void
    {
        echo 'Component 2 does D' . PHP_EOL;
        $this->mediator->notify($this,'D');
    }
}

class ConcreteMediator implements Mediator
{
    private Component1 $component1;
    private Component2 $component2;

    public function __construct(Component1 $c1, Component2 $c2)
    {
        $this->component1 = $c1;
        $this->component1->setMediator($this);

        $this->component2 = $c2;
        $this->component2->setMediator($this);
    }

    public function notify(object $sender, string $event): void
    {
        // TODO: Implement notify() method.
        if ($event == 'A') {
            echo 'Mediator reacts on A and triggers following operations' . PHP_EOL;
            $this->component2->doC();
        }

        if ($event == 'D') {
            echo 'Mediator reacts on D and triggers following operations' . PHP_EOL;
            $this->component1->doB();
            $this->component2->doD();
        }
    }
}

$c1 = new Component1();
$c2 = new Component2();

$mediator = new ConcreteMediator($c1, $c2);
echo 'Client triggers operation A' . PHP_EOL;
$c1->doA();

echo 'Client triggers operation D' . PHP_EOL;
$c2->doD();
