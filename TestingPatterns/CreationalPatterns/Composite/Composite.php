<?php

/*
 * Основной смысл паттерна в том, чтобы позволить вначале создать коллекцию объектов классов, а после их выполнить скопом.
 * Какое-то практическое применение Composite в PHP найти сложно, разве что для решения задач,
 * когда требуется выполнить сразу много действий из разных классов.
 */

namespace testingPatterns\CompositePattern;

trait getCompositeClass
{
    public function get(): void
    {
        // TODO: Implement get() method.
        echo __CLASS__ . PHP_EOL;
    }
}

interface ImplementComponent
{
    public function get(): void;
}

class Composite1 implements ImplementComponent
{
    use getCompositeClass;
}

class Composite2 implements ImplementComponent
{
    use getCompositeClass;
}

class MainComposite
{
    public array $instances = [];

    public function addInstance(ImplementComponent $implementComponent): void
    {
        $this->instances[] = $implementComponent;
    }

    public function run(): void
    {
        foreach ($this->instances as $instance)
        {
            $instance->get();
        }
    }
}

$mainComposite = new MainComposite();

$mainComposite->addInstance(new Composite1());
$mainComposite->addInstance(new Composite2());

$mainComposite->run();


