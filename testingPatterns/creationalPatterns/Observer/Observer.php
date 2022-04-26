<?php

class Observable implements SplSubject
{
    private $observers;

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
        Spl
    }
}
