<?php

class MyName
{
    private string $firstName = '';
    private string $lastName = '';

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

$fullName = (new MyName())->setFirstName('John')->setLastName('Pierce')->getResult();
echo $fullName;
