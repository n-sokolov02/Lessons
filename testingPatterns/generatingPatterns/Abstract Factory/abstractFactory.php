<?php

use JetBrains\PhpStorm\Pure;

interface AbstractFactory
{
    public function createProductA(): AbstractProductA;
    public function createProductB(): AbstractProductB;
}

class ConcreteFactory1 implements AbstractFactory
{
    /**
     * @return AbstractProductA
     */
    #[Pure] public function createProductA(): AbstractProductA
    {
        // TODO: Implement createProductA() method.
        return new ConcreteProductA;
    }

    /**
     * @return AbstractProductB
     */
    #[Pure] public function createProductB(): AbstractProductB
    {
        // TODO: Implement createProductB() method.
        return new ConcreteProductB;
    }
}

class ConcreteFactory2 implements AbstractFactory
{
    /**
     * @return AbstractProductA
     */
    #[Pure] public function createProductA(): AbstractProductA
    {
        // TODO: Implement createProductA() method.
        return new ConcreteProductA2;
    }

    /**
     * @return AbstractProductB
     */
    #[Pure] public function createProductB(): AbstractProductB
    {
        // TODO: Implement createProductB() method.
        return new ConcreteProductB2;
    }
}

interface AbstractProductA
{
    public function usefulFunctionA(): string;
}

class ConcreteProductA implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        // TODO: Implement usefulFunctionA() method.
        return "The result of the product A1.";
    }
}

class ConcreteProductA2 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        // TODO: Implement usefulFunctionA() method.
        return "The result of the product A2.";
    }
}

interface AbstractProductB
{
    public function usefulFunctionB(): string;
    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string;
}

class ConcreteProductB implements AbstractProductB
{
    public function usefulFunctionB(): string
    {
        // TODO: Implement usefulFunctionB() method.
        return "The result of the product B1.";
    }

    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        // TODO: Implement anotherUsefulFunctionB() method.
        return "The result of the B1 collaborating with the ($result)";
    }
}

class ConcreteProductB2 implements AbstractProductB
{
    public function usefulFunctionB(): string
    {
        // TODO: Implement usefulFunctionB() method.
        return "The result of the product B2.";
    }

    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string
    {
        // TODO: Implement anotherUsefulFunctionB() method.
        $result = $collaborator->usefulFunctionA();

        return "The result of the B2 collaborating with ($result)";
    }
}

function clientCode(AbstractFactory $factory)
{
    $productA = $factory->createProductA();
    $productB = $factory->createProductB();

    echo $productB->usefulFunctionB() . PHP_EOL;
    echo $productB->anotherUsefulFunctionB($productA) . PHP_EOL;
}

echo "Client: Testing client code with the first factory type " . PHP_EOL;
clientCode(new ConcreteFactory1());

echo PHP_EOL;

echo "Client: Testing the same client code with the second factory type" . PHP_EOL;
clientCode(new ConcreteFactory2());
