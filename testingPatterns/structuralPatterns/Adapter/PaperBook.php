<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter;

class PaperBook implements Book
{
    private int $page;

    public function open()
    {
        // TODO: Implement open() method.
        $this->page = 1;
    }

    public function turnPage()
    {
        // TODO: Implement turnPage() method.
        $this->page++;
    }

    public function getPage(): int
    {
        // TODO: Implement getPage() method.
        return $this->page;
    }
}
