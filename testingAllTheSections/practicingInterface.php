<?php

interface PracticingInterfaces
{
    const BOOK_AMOUNT = 4;
    public function isRead($bookName);
}

interface TheSecondForPractice extends PracticingInterfaces
{
    const READERS_AMOUNT = 10;
    public function getReaders($bookName);
}

class Book implements PracticingInterfaces, TheSecondForPractice
{
    private string $time;

    public function __construct($time)
    {
        $this->time = $time;
    }

    public function isRead($bookName)
    {
        // TODO: Implement isRead() method.
        if ($bookName == 'Book_1') {
            echo "Amount of readers: " . self::READERS_AMOUNT . PHP_EOL;
            echo "Yes, the book " . $bookName. " was read at " . $this->time . PHP_EOL;
            echo "Amount of these books: " . self::BOOK_AMOUNT;
        } else {
            echo "No, the book " . $bookName . " was not read" . PHP_EOL;
        }
    }

    public function getReaders($bookName)
    {
        // TODO: Implement getReaders() method.
        $this->isRead($bookName);
    }
}

$practiceInterface = new Book('19:28');
echo "Enter the name of the book: ";
$chooseBook = readline();
$practiceInterface->getReaders($chooseBook);

