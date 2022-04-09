<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter;

class EBookAdapter implements Book
{
    public function __construct(protected EBook $eBook)
    {
    }

    public function open()
    {
        // TODO: Implement open() method.
        $this->eBook->unlock();
    }

    public function turnPage()
    {
        // TODO: Implement turnPage() method.
        $this->eBook->pressNext();
    }

    public function getPage(): int
    {
        // TODO: Implement getPage() method.
        return $this->eBook->getPage()[0];
    }
}
