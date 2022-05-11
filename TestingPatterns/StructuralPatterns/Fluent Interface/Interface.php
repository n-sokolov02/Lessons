<?php

// Цепочка методов при вызове. return $this - возвращаем объект текущего класса

namespace TestingPatterns\FluentInterface;

class FullName
{
    private string $firstName;
    private string $lastName;

    public function __construct()
    {
        return $this;
    }

    public function setFirstName($firstName): static
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function setLastName($lastName): static
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getResult(): string
    {
        return $this->firstName . ' ' . $this->lastName . PHP_EOL;
    }
}

$object = (new FullName())->setFirstName('John')->setLastName('Pierce')->getResult();
echo $object;
