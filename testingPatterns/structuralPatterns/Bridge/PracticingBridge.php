<?php

namespace testingPatterns\generatingPatterns\PracticingBridge;

interface CarService
{
    public function format($text): string;
}

abstract class Service
{
    public CarService $carService;
    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    abstract public function get(): string;
}

class HTMLCarService implements CarService
{
    public function format($text): string
    {
        // TODO: Implement format() method.
        return '<b>' . $text . '</b>' . PHP_EOL;
    }
}

class TextCarService implements CarService
{
    public function format($text): string
    {
        // TODO: Implement format() method.
        return $text . PHP_EOL;
    }
}

class Bridge extends Service
{
    public function get(): string
    {
        return $this->carService->format('Bridge') . PHP_EOL;
    }
}

$bridge = new Bridge(new HTMLCarService());
echo $bridge->get();
