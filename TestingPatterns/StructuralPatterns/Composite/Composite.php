<?php

/*
 * Основной смысл паттерна в том, чтобы позволить вначале создать коллекцию объектов классов, а после их выполнить скопом.
 * Какое-то практическое применение Composite в PHP найти сложно, разве что для решения задач,
 * когда требуется выполнить сразу много действий из разных классов.
 */

namespace testingPatterns\CompositePattern;

trait insertCompositeMethod
{
    public function compose(): string
    {
        // TODO: Implement compose() method.
        return __CLASS__;
    }
}

interface CompositeMethod
{
    public function compose(): string;
}

class Composite1 implements CompositeMethod
{
    use insertCompositeMethod;
}

class Composite2 implements CompositeMethod
{
    use insertCompositeMethod;
}

class MainComposite
{
    private array $steps;

    public function add(CompositeMethod $compositeMethod): void
    {
        $this->steps[] = $compositeMethod->compose();
    }

    public function get(): void
    {
        echo implode(' + ', $this->steps);
    }
}

$mainComposite = new MainComposite();

$mainComposite->add(new Composite1);
$mainComposite->add(new Composite2);

$mainComposite->get();
