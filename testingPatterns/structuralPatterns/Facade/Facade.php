<?php

use JetBrains\PhpStorm\Pure;

class Facade
{
    protected $subsystem1;
    protected $subsystem2;

    #[Pure] public function __construct(Subsystem1 $subsystem1 = null, Subsystem2 $subsystem2 = null)
    {
        $this->subsystem1 = $subsystem1 ?: new Subsystem1();
        $this->subsystem2 = $subsystem2 ?: new Subsystem2();
    }

    #[Pure] public function facadeOperation(): string
    {
        $result = "Facade initializes subsystems: ". PHP_EOL;
        $result .= $this->subsystem1->operation1();
        $result .= $this->subsystem2->operation1();
        $result .= "Facade orders subsystems to perform the action: " . PHP_EOL;
        $result .= $this->subsystem1->operationN();
        $result .= $this->subsystem2->operationZ();

        return $result;
    }
}

class Subsystem1
{
    public function operation1(): string
    {
        return "Subsystem1: Ready!" . PHP_EOL;
    }

    public function operationN(): string
    {
        return "Subsystem1: Go!" . PHP_EOL;

    }
}

class Subsystem2
{
    public function operation1(): string
    {
        return "Subsystem2: Get Ready!" . PHP_EOL;
    }

    public function operationZ(): string
    {
        return "Subsystem2: Fire!" . PHP_EOL;
    }
}

function facadeClientCode(Facade $facade)
{
    echo $facade->facadeOperation();
}

$subsystem1 = new Subsystem1();
$subsystem2 = new Subsystem2();

$facade = new Facade($subsystem1, $subsystem2);
facadeClientCode($facade);
