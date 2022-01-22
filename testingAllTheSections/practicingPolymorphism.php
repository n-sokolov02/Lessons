<?php

abstract class AbstractPerson
{
    abstract public function personName();
}

class EnglishPerson extends AbstractPerson
{
    public function personName(): string
    {
        // TODO: Implement personName() method.
        return 'Daniil' . PHP_EOL;
    }
}

class GermanPerson extends AbstractPerson
{
    public function personName(): string
    {
        // TODO: Implement personName() method.
        return 'Voldemar' . PHP_EOL;
    }
}

class RussianPerson extends AbstractPerson
{
    public function personName(): string
    {
        // TODO: Implement personName() method.
        return 'Vladimir' . PHP_EOL;
    }
}

$people = [
    new EnglishPerson(),
    new GermanPerson(),
    new RussianPerson(),
];

function allPersons($people) {
    foreach ($people as $person) {
        echo $person->personName();
    }
}

allPersons($people);
