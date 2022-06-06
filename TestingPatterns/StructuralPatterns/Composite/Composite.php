<?php

/*
 * Основной смысл паттерна в том, чтобы позволить вначале создать коллекцию объектов классов, а после их выполнить скопом.
 * Какое-то практическое применение Composite в PHP найти сложно, разве что для решения задач,
 * когда требуется выполнить сразу много действий из разных классов.
 */

namespace testingPatterns\CompositePattern;

interface CompositeInterface
{
    public function get(): string;
}

class A implements CompositeInterface
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return __CLASS__;
    }
}

class B implements CompositeInterface
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return __CLASS__;
    }
}

class C implements CompositeInterface
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return __CLASS__;
    }
}

class Composite
{
    public CompositeInterface $composite;
    private array $instances = [];

    public function add(CompositeInterface $composite): void
    {
        $this->instances[] = $composite->get();
    }

    public function getInstances(): void
    {
        echo implode(' + ', $this->instances);
    }
}

function addInstancesAndOutputArray(): void
{
    $compositeObject = new Composite();

    $compositeObject->add(new A());
    $compositeObject->add(new B());
    $compositeObject->add(new C());
    $compositeObject->getInstances();
}

addInstancesAndOutputArray();