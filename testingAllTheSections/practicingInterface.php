<?php

interface PracticingInterfaces
{
    const BOOK_AMOUNT = 4;
    public function isRead($bookName);
}

class Book implements PracticingInterfaces
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
            echo "Yes, the book " . $bookName. " was read at " . $this->time . PHP_EOL;
            echo "Amount of these books: " . self::BOOK_AMOUNT;
        } else {
            echo "No, the book " . $bookName . " was not read" . PHP_EOL;
        }
    }
}

$practiceInterface = new Book('19:28');
echo "Enter the name of the book: ";
$chooseBook = readline();
$practiceInterface->isRead($chooseBook);

