<?php

/*
 * Основной смысл паттерна в том, чтобы позволить вначале создать коллекцию объектов классов, а после их выполнить скопом.
 * Какое-то практическое применение Composite в PHP найти сложно, разве что для решения задач,
 * когда требуется выполнить сразу много действий из разных классов.
 */

namespace testingPatterns\CompositePattern;

interface CompositePattern
{
    public function get(): string;
}

class Composite1 implements CompositePattern
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return __CLASS__;
    }
}

class Composite2 implements CompositePattern
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return __CLASS__;
    }
}

class MainComposite
{
    public array $instances = [];

    public function add(CompositePattern $compositePattern)
    {
        $this->instances[] = $compositePattern->get();
    }

    public function getInstances(): string
    {
        return implode(' + ', $this->instances);
    }
}

$mainObject = new MainComposite();
$mainObject->add(new Composite1);
$mainObject->add(new Composite2);
echo $mainObject->getInstances();
