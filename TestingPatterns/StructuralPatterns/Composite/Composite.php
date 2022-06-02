<?php

/*
 * Основной смысл паттерна в том, чтобы позволить вначале создать коллекцию объектов классов, а после их выполнить скопом.
 * Какое-то практическое применение Composite в PHP найти сложно, разве что для решения задач,
 * когда требуется выполнить сразу много действий из разных классов.
 */

namespace testingPatterns\CompositePattern;

interface ImplCompose
{
    public function compose(): string;
}

class Composite1 implements ImplCompose
{
    public function compose(): string
    {
        // TODO: Implement compose() method.
        return __CLASS__;
    }
}

class Composite2 implements ImplCompose
{
    public function compose(): string
    {
        // TODO: Implement compose() method.
        return __CLASS__;
    }
}

class MainComposite
{
    private array $instances;

    public function add(ImplCompose $implCompose): void
    {
        $this->instances[] = $implCompose->compose();
    }

    public function getArray(): void
    {
        echo implode(' + ', $this->instances);
    }
}

$mainComposite = new MainComposite();

$mainComposite->add(new Composite1());
$mainComposite->add(new Composite2());

$mainComposite->getArray();
