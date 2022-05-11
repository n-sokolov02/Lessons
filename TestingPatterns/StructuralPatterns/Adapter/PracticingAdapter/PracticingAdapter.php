<?php

namespace testingPatterns\PracticingAdapter;

interface Book
{
    public function open();

    public function turnPage();

    public function getPage(): int;
}

interface EBook
{
    public function unlock();

    public function nextPage();

    public function getPage(): array;
}

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
        $this->eBook->nextPage();
    }

    public function getPage(): int
    {
        // TODO: Implement getPage() method.
        return $this->eBook->getPage()[0];
    }
}

class Kindle implements EBook
{
    private int $startPage = 1;
    private int $endPage = 100;

    public function unlock()
    {
        // TODO: Implement unlock() method.
    }

    public function nextPage()
    {
        // TODO: Implement nextPage() method.
        $this->startPage++;
    }

    public function getPage(): array
    {
        // TODO: Implement getPage() method.
        return [$this->startPage, $this->endPage];
    }
}

$kindle = new Kindle();
$kindle->unlock();
print_r($kindle->getPage());
$kindle->nextPage();
print_r($kindle->getPage());

