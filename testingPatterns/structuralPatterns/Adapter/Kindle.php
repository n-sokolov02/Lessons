<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter;

class Kindle implements EBook
{
    private int $page = 1;
    private int $totalPages = 100;

    public function pressNext()
    {
        // TODO: Implement pressNext() method.
        $this->page++;
    }

    public function unlock()
    {
        // TODO: Implement unlock() method.
    }

    public function getPage(): array
    {
        // TODO: Implement getPage() method.
        return [$this->page, $this->totalPages];
    }
}
