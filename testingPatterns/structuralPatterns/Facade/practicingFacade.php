<?php

use JetBrains\PhpStorm\Pure;

interface Implementation
{
    public function getEchoX(): string;
    public function getEchoZ(): string;
    public function getEchoY(): string;
}

class PracticeFacade
{
    protected ?PracticeColumn1 $practiceColumn1;
    protected ?PracticeColumn2 $practiceColumn2;

    #[Pure] public function __construct(PracticeColumn1 $practiceColumn1 = null, PracticeColumn2 $practiceColumn2 = null)
    {
        $this->practiceColumn1 = $practiceColumn1 ?: new PracticeColumn1;
        $this->practiceColumn2 = $practiceColumn2 ?: new PracticeColumn2;
    }

    #[Pure] public function echoFacades(): string
    {
        $wholeEcho = $this->practiceColumn1->getEchoX();
        $wholeEcho .= $this->practiceColumn2->getEchoY();
        $wholeEcho .= $this->practiceColumn1->getEchoZ() . PHP_EOL;
        $wholeEcho .= $this->practiceColumn2->getEchoX();
        $wholeEcho .= $this->practiceColumn1->getEchoY();
        $wholeEcho .= $this->practiceColumn2->getEchoZ();

        return $wholeEcho;
    }
}

class PracticeColumn1 implements Implementation
{
    public function getEchoX(): string
    {
        // TODO: Implement getEchoX() method.
        return "(X1)";
    }

    public function getEchoY(): string
    {
        // TODO: Implement getEchoY() method.
        return "(Y1)";
    }

    public function getEchoZ(): string
    {
        // TODO: Implement getEchoZ() method.
        return "(Z1)";
    }
}

class PracticeColumn2 implements Implementation
{
    public function getEchoX(): string
    {
        // TODO: Implement getEchoX() method.
        return "(X2)";
    }

    public function getEchoY(): string
    {
        // TODO: Implement getEchoY() method.
        return "(Y2)";
    }

    public function getEchoZ(): string
    {
        // TODO: Implement getEchoZ() method.
        return "(Z2)";
    }
}

function practiceFacadeCode(PracticeFacade $facade)
{
    echo $facade->echoFacades();
}

$practiceColumn1 = new PracticeColumn1();
$practiceColumn2 = new PracticeColumn2();

$wholeFacade = new PracticeFacade($practiceColumn1, $practiceColumn2);
practiceFacadeCode($wholeFacade);
