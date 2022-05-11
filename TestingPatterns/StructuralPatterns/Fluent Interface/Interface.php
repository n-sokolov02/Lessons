<?php

// Цепочка методов при вызове. return $this - возвращаем объект текущего класса

namespace TestingPatterns\FluentInterface;

class FullName
{
    private string $firstName;
    private string $lastName;

    public function setFirstName($input): FullName
    {
        $this->firstName = $input;
        return $this;
    }

    public function setLastName($input): FullName
    {
        $this->lastName = $input;
        return $this;
    }

    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName . PHP_EOL;
    }
}

$objectOfFullNameClass = (new FullName())->setFirstName('Daniil')->setLastName('Boyko')->getFullName();
echo $objectOfFullNameClass;
