<?php

// new different functions to the main object

namespace testingPatterns\structuralPatterns\Decorator;

trait getParentDecoratedConstructor
{
    public function decorate(): string
    {
        return __CLASS__ . '(' . parent::decorate() . ')';
    }
}

interface Component
{
    public function decorate(): string;
}

class ClassComponent implements Component
{
    public function decorate(): string
    {
        return 'CreatedProduct';
    }
}

class InitDecorator implements Component
{
    protected Component $component;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    public function decorate(): string
    {
        // TODO: Implement decorate() method.
        return $this->component->decorate();
    }
}

class Decorator1 extends InitDecorator
{
    use getParentDecoratedConstructor;
}

class Decorator2 extends InitDecorator
{
    use getParentDecoratedConstructor;
}

function getDecoratedProduct(Component $component)
{
    echo 'RESULT: ' . $component->decorate() . PHP_EOL;
}

$initProduct = new ClassComponent();
getDecoratedProduct($initProduct);

$objectOfDecorator1 = new Decorator1($initProduct);
$objectOfDecorator2 = new Decorator2($objectOfDecorator1);
getDecoratedProduct($objectOfDecorator2);
