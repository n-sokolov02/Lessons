<?php

// Цепочка методов при вызове. return $this - возвращаем объект текущего класса

namespace TestingPatterns\FluentInterface;

class FluentInterface
{
    private string $firstName;
    private string $lastName;

    public function setFirstName($input): FluentInterface
    {
        $this->firstName = $input;
        return $this;
    }

    public function setLastName($input): FluentInterface
    {
        $this->lastName = $input;
        return $this;
    }

    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName . PHP_EOL;
    }
}

$fluentInterface = (new FluentInterface())->setFirstName('DANIIL')->setLastName('BOYKO')->getFullName();
echo $fluentInterface;