<?php

interface getComposite
{
    public function get();
}

class CompositeRegistry
{
    private array $classes;

    public function addClass(getComposite $class): void
    {
        $this->classes[] = $class;
    }

    public function execute(): void
    {
        foreach ($this->classes as $class) {
            $class->get();
        }
    }
}

class Composite1 implements getComposite
{
    public function get()
    {
        // TODO: Implement get() method.
        echo __CLASS__ . PHP_EOL;
    }
}

class Composite2 implements getComposite
{
    public function get()
    {
        echo __CLASS__ . PHP_EOL;
    }
}

$composite = new CompositeRegistry();

$composite->addClass(new Composite1());
$composite->addClass(new Composite2());

$composite->execute();
