<?php

interface Component
{
    public function operation(): string;
}

class ConcreteComponent implements Component
{
    public function operation(): string
    {
        // TODO: Implement operation() method.
        return "ConcreteComponent";
    }
}

class Decorator implements Component
{
    protected ?Component $component;

    /**
     * @param Component $component
     */
    public function __construct(Component $component)
    {
        $this->component = $component;
    }


    public function operation(): string
    {
        // TODO: Implement operation() method.
        return $this->component->operation();
    }
}

class ConcreteDecoratorA extends Decorator
{
    public function operation(): string
    {
        return "ConcreteDecoratorA(" . parent::operation() . ')';
    }
}

class ConcreteDecoratorB extends Decorator
{
    public function operation(): string
    {
        return "ConcreteDecoratorB(" . parent::operation(). ')';
    }
}

function decoratorClientCode(Component $component)
{
    echo "RESULT: " . $component->operation();
}

$simple = new ConcreteComponent();
echo "Client: I've got a simply component." . PHP_EOL;
decoratorClientCode($simple);
echo PHP_EOL . PHP_EOL;

$decorator_1 = new ConcreteDecoratorA($simple);
$decorator_2 = new ConcreteDecoratorB($decorator_1);
echo "Client: Now I've got a decorated component." . PHP_EOL;
decoratorClientCode($decorator_2);
