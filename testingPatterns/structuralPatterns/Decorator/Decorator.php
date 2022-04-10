<?php

trait getDecoratorOutput
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
        // TODO: Implement decorate() method.
        return 'initProduct';
    }
}

class ClassDecorator implements Component
{
    protected ?Component $component;

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

class Decorator1 extends ClassDecorator
{
    use getDecoratorOutput;
}

class Decorator2 extends ClassDecorator
{
    use getDecoratorOutput;
}

function getDecoratorsCode(Component $component)
{
    echo 'RESULT: ' . $component->decorate() . PHP_EOL;
}

$initProduct = new ClassComponent();
getDecoratorsCode($initProduct);

$decorator_1 = new Decorator1($initProduct);
$decorator_2 = new Decorator2($decorator_1);
getDecoratorsCode($decorator_2);
