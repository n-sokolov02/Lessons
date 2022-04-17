<?php

namespace testingPatterns\CompositePattern;

interface CarMaker
{
    public function get(): string;
}

class WheelsMaker implements CarMaker
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return __CLASS__;
    }
}

class GlassesMaker implements CarMaker
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return __CLASS__;
    }
}

class CasualEngineMaker implements CarMaker
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return __CLASS__;
    }
}

class ElectricEngineMaker implements CarMaker
{
    public string $replace;

    public function __construct()
    {
        $cls = new CasualEngineMaker();
        $this->replace = $cls->get();
    }

    public function change(): string
    {
        return str_replace('CasualEngineMaker', 'ElectricEngineMaker', $this->replace);
    }

    public function get(): string
    {
        // TODO: Implement get() method.
        return $this->change();
    }
}

class CarFactory
{
    public array $units = [];

    public function add($component)
    {
        $this->units[] = $component;
    }

    public function getCar(): string
    {
        $steps = [];

        foreach ($this->units as $component)
        {
            $steps[] = $component->get();
        }

        return implode(' + ', $steps);
    }
}

$result = new CarFactory();
$result->add(new ElectricEngineMaker());
$result->add(new WheelsMaker());
$result->add(new GlassesMaker());

echo $result->getCar();
