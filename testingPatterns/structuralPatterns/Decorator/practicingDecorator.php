<?php

interface ImplementComponent
{
    public function forDecorators(): string;
}

class PracticeComponent implements ImplementComponent
{
    public function forDecorators(): string
    {
        // TODO: Implement forDecorators() method.
        return "111";
    }
}

class PracticeDecorator implements ImplementComponent
{
    protected ?ImplementComponent $implementComponent;

    /**
     * @param ImplementComponent|null $implementComponent
     */
    public function __construct(?ImplementComponent $implementComponent)
    {
        $this->implementComponent = $implementComponent;
    }

    /**
     * @return string
     */
    public function forDecorators(): string
    {
        // TODO: Implement forDecorators() method.
        return $this->implementComponent->forDecorators();
    }
}

class PracticeDecoratorA extends PracticeDecorator
{
    /**
     * @return string
     */
    public function forDecorators(): string
    {
        return "222(" . parent::forDecorators() . ')';
    }
}

class PracticeDecoratorB extends PracticeDecorator
{
    /**
     * @return string
     */
    public function forDecorators(): string
    {
        return "333(" . parent::forDecorators() . ')';
    }
}

function clientDecoratorsCode(ImplementComponent $implementComponent)
{
    echo 'RESULT::' . $implementComponent->forDecorators() . PHP_EOL;
}

$firstStep = new PracticeComponent();
clientDecoratorsCode($firstStep);

$secondStep = new PracticeDecoratorA($firstStep);
$thirdStep = new PracticeDecoratorB($secondStep);
clientDecoratorsCode($thirdStep);
