<?php

namespace testingPatterns\Composite;

class CoffeeMaker
{
    public function get(): string
    {
        return 'coffee';
    }
}

class CreamMaker
{
    public function get(): string
    {
        return 'cream';
    }
}

class Plumbing
{
    public function get(): string
    {
        return 'water';
    }
}

class IceMaker
{
    public string $water;

    public function __construct()
    {
        $plumbing = new Plumbing;
        $this->water = $plumbing->get();
    }

    public function freezer()
    {
        return str_replace('water', 'ice', $this->water);
    }

    public function get()
    {
        return $this->freezer();
    }
}

class CoffeeMachine
{
    protected array $units = [];

    public function add($component)
    {
        $this->units[] = $component;
    }

    public function getCoffee(): string
    {
        $ingredients = [];

        foreach ($this->units as $component)
        {
            $ingredients[] = $component->get();
        }

        return implode(' + ', $ingredients);
    }
}

$machine = new CoffeeMachine();
$machine->add(new CoffeeMaker());
$machine->add(new CreamMaker());
$machine->add(new IceMaker());

echo $machine->getCoffee();
