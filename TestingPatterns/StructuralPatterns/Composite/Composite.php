<?php

/*
 * Основной смысл паттерна в том, чтобы позволить вначале создать коллекцию объектов классов, а после их выполнить скопом.
 * Какое-то практическое применение Composite в PHP найти сложно, разве что для решения задач,
 * когда требуется выполнить сразу много действий из разных классов.
 */

namespace testingPatterns\CompositePattern;

interface ImplementCompose
{
    public function get(): string;
}

class Composite1 implements ImplementCompose
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return __CLASS__;
    }
}

class Composite2 implements ImplementCompose
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return __CLASS__;
    }
}

class MainComposite
{
    private array $commits = [];

    public function add(ImplementCompose $compose): void
    {
        $this->commits[] = $compose->get();
    }

    public function getCommits(): void
    {
        echo implode(' + ', $this->commits) . PHP_EOL;
    }
}

$mainComposite = new MainComposite();

$mainComposite->add(new Composite1());
$mainComposite->add(new Composite2());

$mainComposite->getCommits();