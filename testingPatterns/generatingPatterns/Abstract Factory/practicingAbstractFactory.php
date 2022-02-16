<?php

use JetBrains\PhpStorm\Pure;

interface PracticeAbstractFactory
{
    public function practiceCreateProductA(): PracticeAbstractProductA;
    public function practiceCreateProductB(): PracticeAbstractProductB;
}

interface PracticeAbstractProductA
{
    public function practiceUsefulFunctionA(): string;
}

interface PracticeAbstractProductB
{
    public function practiceUsefulFunctionB(): string;
    public function practiceAdditionalUsefulFunctionB(PracticeAbstractProductA $joinProduct): string;
}

class PracticeConcreteFactory1 implements PracticeAbstractFactory
{
    /**
     * @return PracticeAbstractProductA
     */
    #[Pure] public function practiceCreateProductA(): PracticeAbstractProductA
    {
        // TODO: Implement practiceCreateProductA() method.
        return new PracticeConcreteProductA();
    }

    /**
     * @return PracticeAbstractProductB
     */
    #[Pure] public function practiceCreateProductB(): PracticeAbstractProductB
    {
        // TODO: Implement practiceCreateProductB() method.
        return new PracticeConcreteProductB();
    }
}

class PracticeConcreteFactory2 implements PracticeAbstractFactory
{
    #[Pure] public function practiceCreateProductA(): PracticeConcreteProductA2
    {
        // TODO: Implement practiceCreateProductA() method.
        return new PracticeConcreteProductA2();
    }

    #[Pure] public function practiceCreateProductB(): PracticeConcreteProductB2
    {
        // TODO: Implement practiceCreateProductB() method.
        return new PracticeConcreteProductB2();
    }
}

class PracticeConcreteProductA implements PracticeAbstractProductA
{
    public function practiceUsefulFunctionA(): string
    {
        // TODO: Implement practiceUsefulFunctionA() method.
        return "The result of the standard product A.";
    }
}

class PracticeConcreteProductB implements PracticeAbstractProductB
{
    public function practiceUsefulFunctionB(): string
    {
        // TODO: Implement practiceUsefulFunctionB() method.
        return "The result of the standard product B.";
    }

    public function practiceAdditionalUsefulFunctionB(PracticeAbstractProductA $joinProduct): string
    {
        $result = $joinProduct->practiceUsefulFunctionA();

        // TODO: Implement practiceAdditionalUsefulFunctionB() method.
        return "The result of the product B with $result";
    }
}

class PracticeConcreteProductA2 implements PracticeAbstractProductA
{
    public function practiceUsefulFunctionA(): string
    {
        // TODO: Implement practiceUsefulFunctionA() method.
        return "The result of the standard product A2.";
    }
}

class PracticeConcreteProductB2 implements PracticeAbstractProductB
{
    public function practiceUsefulFunctionB(): string
    {
        // TODO: Implement practiceUsefulFunctionB() method.
        return "The result of the standard product B2.";
    }

    public function practiceAdditionalUsefulFunctionB(PracticeAbstractProductA $joinProduct): string
    {
        $result = $joinProduct->practiceUsefulFunctionA();
        // TODO: Implement practiceAdditionalUsefulFunctionB() method.
        return "The result of the product B2 with $result.";
    }
}

function clientPracticeCode(PracticeAbstractFactory $factory)
{
    $practiceProductA = $factory->practiceCreateProductA();
    $practiceProductB = $factory->practiceCreateProductB();

    echo $practiceProductB->practiceUsefulFunctionB();
    echo $practiceProductB->practiceAdditionalUsefulFunctionB($practiceProductA);
}

echo "Client: Products with 1 factory" . PHP_EOL;
clientPracticeCode(new PracticeConcreteFactory1());

echo PHP_EOL;

echo "Client: Products with 2 factory" . PHP_EOL;
clientPracticeCode(new PracticeConcreteFactory2());
