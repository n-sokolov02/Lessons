<?php

class Observable implements SplSubject
{
    private SplObjectStorage $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        // TODO: Implement attach() method.
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        // TODO: Implement detach() method.
        $this->observers->detach($observer);
    }

    function notify()
    {
        // TODO: Implement notify() method.
        foreach ($this->observers as $observer)
        {
            $observer->update($this);
        }
    }
}

class Observer1 implements SplObserver
{
    public function update(SplSubject $subject)
    {
        // TODO: Implement update() method.
        echo 'UPDATED OBSERVER_1' . PHP_EOL;
    }
}

class Observer2 implements SplObserver
{
    public function update(SplSubject $subject)
    {
        // TODO: Implement update() method.
        echo 'UPDATED OBSERVER_2' . PHP_EOL;
    }
}

$observable = new Observable();
$observer1 = new Observer1();
$observer2 = new Observer2();
$observable->attach($observer1);
$observable->attach($observer2);
$observable->notify();
$observable->detach($observer1);
$observable->notify();
