<?php

interface getFood
{
    public function get(): string;
}

class SodaMaker implements getFood
{
    public function get(): string
    {
        return 'SODA_MAKER';
    }
}

class FoodMaker implements getFood
{
    public function get(): string
    {
        return 'FOOD_MAKER';
    }
}

class CoffeeMaker implements getFood
{
    public function get(): string
    {
        return 'COFFEE_MAKER';
    }
}

class TeaMaker implements getFood
{
    public CoffeeMaker $coffeeMaker;

    public function __construct()
    {
        $this->coffeeMaker = new CoffeeMaker();
    }

    public function change(): string
    {
        return str_replace('COFFEE_MAKER', 'TEA_MAKER', $this->coffeeMaker->get());
    }

    public function get(): string
    {
        return $this->change();
    }
}

class ResultFood
{
    protected array $units = [];

    public function add($component): void
    {
        $this->units[] = $component->get();
    }

    public function getResultFood(): string
    {
        return implode(' + ', $this->units);
    }
}

$result = new ResultFood();

$result->add(new SodaMaker());
$result->add(new FoodMaker());
$result->add(new CoffeeMaker());

echo $result->getResultFood();
