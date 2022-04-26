<?php

namespace testingPatterns\structuralPatterns\Decorator\PracticingDecorator;

//trait getDecoratedProduct
//{
//    public function decorate(): string
//    {
//        return __CLASS__ . '(' . parent::decorate() . ')';
//    }
//}

interface ImplementComponent
{
    public function decorate(): string;
}

class InitComponent implements ImplementComponent
{
    public function decorate(): string
    {
        //TODO: Implement decorate() method.
        return 'INIT_COMP';
    }
}

class InitPracticeDecorator implements ImplementComponent
{
    protected ImplementComponent $implementComponent;

    public function __construct(ImplementComponent $implementComponent)
    {
        $this->implementComponent = $implementComponent;
    }

    public function decorate(): string
    {
        // TODO: Implement decorate() method.
        return $this->implementComponent->decorate();
    }
}

class PracticeDecorator1 extends InitPracticeDecorator
{
    public function decorate(): string
    {
        return 'DEC_1(' .  parent::decorate() . ')'; // TODO: Change the autogenerated stub
    }
}

class PracticeDecorator2 extends InitPracticeDecorator
{
    public function decorate(): string
    {
        return 'DEC_2(' . parent::decorate() . ')'; // TODO: Change the autogenerated stub
    }
}

function getResultProduct(ImplementComponent $implementComponent): void
{
    echo 'RESULT: ' . $implementComponent->decorate() . PHP_EOL;
}

$initProduct = new InitComponent();
getResultProduct($initProduct);

$objectOfDecorator_1 = new PracticeDecorator1($initProduct);
$objectOfDecorator_2 = new PracticeDecorator2($objectOfDecorator_1);
getResultProduct($objectOfDecorator_2);
