<?php

//better than simple furniture factory, more conditions and small differences with objects

namespace testingPatterns\generatingPatterns\AbstractFactory;

interface AbstractProductA
{
    public function operation1A(): string;
}

interface AbstractProductB
{
    public function operation1B(): string;
    public function operation2B(AbstractProductA $joinProduct);
}

interface AbstractFactory
{
    public function createProductA(): AbstractProductA;
    public function createProductB(): AbstractProductB;
}

class Factory1 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        // TODO: Implement createProductA() method.
        return new ProductAFactory1();
    }

    public function createProductB(): AbstractProductB
    {
        // TODO: Implement createProductB() method.
        return new ProductBFactory1();
    }
}

class Factory2 implements AbstractFactory
{
    public function createProductA(): ProductAFactory2
    {
        // TODO: Implement createProductA() method.
        return new ProductAFactory2();
    }

    public function createProductB(): ProductBFactory2
    {
        // TODO: Implement createProductB() method.
        return new ProductBFactory2();
    }
}

class ProductAFactory1 implements AbstractProductA
{
    public function operation1A(): string
    {
        // TODO: Implement operation1A() method.
        return "The result of the producing Product A Factory 1";
    }
}

class ProductBFactory1 implements AbstractProductB
{
    public function operation1B(): string
    {
        // TODO: Implement operation1B() method.
        return "The result of the producing Product B Factory 1";
    }

    public function operation2B(AbstractProductA $joinProduct): string
    {
        // TODO: Implement operation2B() method.
        $result = $joinProduct->operation1A();
        return "The result of the joining Product A " . $result . PHP_EOL;
    }
}

class ProductAFactory2 implements AbstractProductA
{
    public function operation1A(): string
    {
        // TODO: Implement operation1A() method.
        return "The result of the Product A Factory 2";
    }
}

class ProductBFactory2 implements AbstractProductB
{
    public function operation1B(): string
    {
        // TODO: Implement operation1B() method.
        return "The result of the Product B Factory 2";
    }

    public function operation2B(AbstractProductA $joinProduct): string
    {
        // TODO: Implement operation2B() method.
        $result = $joinProduct->operation1A();
        return "The result of the producing Product B2 with" . $result;
    }
}

function getFactory(AbstractFactory $abstractFactory): void
{
    $practiceProductA = $abstractFactory->createProductA();
    $practiceProductB = $abstractFactory->createProductB();

    $practiceProductB->operation1B();
    $practiceProductB->operation2B($practiceProductA);
}

getFactory(new Factory1());
getFactory(new Factory2());
