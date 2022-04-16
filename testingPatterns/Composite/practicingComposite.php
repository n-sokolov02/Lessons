<?php

class CarMaker
{
    public function get(): string
    {
        return 'Car';
    }
}

class MotoMaker
{
    protected string $model;

    public function __construct()
    {
        $carClass = new CarMaker();
        $this->model = $carClass->get();
    }

    public function change(): string
    {
        return str_replace('Car', 'Moto', $this->model);
    }

    public function get(): string
    {
        return $this->change();
    }
}

class WheelsMaker
{
    public function get(): string
    {
        return 'Wheels';
    }
}

class EngineMaker
{
    public function get(): string
    {
        return 'Engine';
    }
}

class ElecticEngineMaker
{
    protected string $engineMaker;

    public function __construct()
    {
        $engine = new EngineMaker();
        $this->engineMaker = $engine->get();
    }

    public function change(): string
    {
        return str_replace('Engine', 'ElecticEngine', $this->engineMaker);
    }

    public function get(): string
    {
        return $this->change();
    }
}

class ResultCar
{
    protected array $units = [];

    public function add($component)
    {
        $this->units[] = $component;
    }

    public function getCar(): string
    {
        $steps = [];

        foreach($this->units as $component)
        {
            $steps[] = $component->get();
        }

        return implode(' + ', $steps);
    }
}

$result = new ResultCar();

$result->add(new MotoMaker());
$result->add(new WheelsMaker());
$result->add(new ElecticEngineMaker());

echo $result->getCar();

