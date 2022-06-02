<?php

//better than simple furniture factory, more conditions and small differences with objects

namespace testingPatterns\generatingPatterns\AbstractFactory;

interface AbstractProductA
{
    public function operationA(): string;
}

interface AbstractProductB
{
    public function operationA(): string;
    public function operationB(AbstractProductA $joinProduct): string;
}

interface AbstractFactory
{
    public function createProductA(): AbstractProductA;
    public function createProductB(): AbstractProductB;
}

class ProductAFactory1 implements AbstractProductA
{
    public function operationA(): string
    {
        // TODO: Implement operationA() method.
        return __METHOD__ . PHP_EOL;
    }
}

class ProductBFactory1 implements AbstractProductB
{
    public function operationA(): string
    {
        // TODO: Implement operationA() method.
        return __METHOD__ . PHP_EOL;
    }

    public function operationB(AbstractProductA $joinProduct): string
    {
        // TODO: Implement operationB() method.
        $result = $joinProduct->operationA();
        return "The result of Product A Factory 1 with " . $result . PHP_EOL;
    }
}

class ProductAFactory2 implements AbstractProductA
{
    public function operationA(): string
    {
        // TODO: Implement operationA() method.
        return __METHOD__ . PHP_EOL;
    }
}

class ProductBFactory2 implements AbstractProductB
{
    public function operationA(): string
    {
        // TODO: Implement operationA() method.
        return __METHOD__ . PHP_EOL;
    }

    public function operationB(AbstractProductA $joinProduct): string
    {
        // TODO: Implement operationB() method.
        $result = $joinProduct->operationA();
        return "The result of Product A Factory 2 with " . $result . PHP_EOL;
    }
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
    public function createProductA(): AbstractProductA
    {
        // TODO: Implement createProductA() method.
        return new ProductAFactory2();
    }

    public function createProductB(): AbstractProductB
    {
        // TODO: Implement createProductB() method.
        return new ProductBFactory2();
    }
}

function clientCode(AbstractFactory $abstractFactory): void
{
    $productA = $abstractFactory->createProductA();
    $productB = $abstractFactory->createProductB();

    echo $productA->operationA();
    echo $productB->operationA();
    echo $productB->operationB($productA);
}

echo 'TESTING FACTORY_1' . PHP_EOL;
clientCode(new Factory1());

echo 'TESTING FACTORY_2' . PHP_EOL;
clientCode(new Factory2());
