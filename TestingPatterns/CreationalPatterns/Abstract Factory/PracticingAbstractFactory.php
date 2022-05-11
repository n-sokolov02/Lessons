<?php

namespace testingPatterns\GeneratingPatterns\PracticingAbstractFactory;

interface AbstractFactory
{
    public function createProductA(): AbstractProductA;
    public function createProductB(): AbstractProductB;
}

interface AbstractProductA
{
    public function operation1A(): string;
}

interface AbstractProductB
{
    public function operation1B(): string;
    public function operation2B(AbstractProductA $joinOperation): string;
}

class ProductAFactory1 implements AbstractProductA
{
    public function operation1A(): string
    {
        // TODO: Implement operation1A() method.
        return 'PRODUCT_A | FACTORY_1' . PHP_EOL;
    }
}

class ProductBFactory1 implements AbstractProductB
{
    public function operation1B(): string
    {
        // TODO: Implement operation1B() method.
        return 'PRODUCT_B | FACTORY_1' . PHP_EOL;
    }

    public function operation2B(AbstractProductA $joinOperation): string
    {
        // TODO: Implement operation2B() method.
        return 'PRODUCT_B | FACTORY_1 ' . $joinOperation->operation1A() . PHP_EOL;
    }
}

class ProductAFactory2 implements AbstractProductA
{
    public function operation1A(): string
    {
        // TODO: Implement operation1A() method.
        return 'PRODUCT_A | FACTORY_2' . PHP_EOL;
    }
}

class ProductBFactory2 implements AbstractProductB
{
    public function operation1B(): string
    {
        // TODO: Implement operation1B() method.
        return 'PRODUCT_B | FACTORY_2' . PHP_EOL;
    }

    public function operation2B(AbstractProductA $joinOperation): string
    {
        // TODO: Implement operation2B() method.
        return 'PRODUCT_B | FACTORY_2 ' . $joinOperation->operation1A() . PHP_EOL;
    }
}

class Factory1 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        // TODO: Implement createProductA() method.
        return new ProductAFactory1;
    }

    public function createProductB(): AbstractProductB
    {
        // TODO: Implement createProductB() method.
        return new ProductBFactory1;
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

function getResultProduct(AbstractFactory $abstractFactory): void
{
    $product_A = $abstractFactory->createProductA();
    $product_B = $abstractFactory->createProductB();

    echo $product_A->operation1A();
    echo $product_B->operation1B();
    echo $product_B->operation2B($product_A);
}

getResultProduct(new Factory1());
getResultProduct(new Factory2());
