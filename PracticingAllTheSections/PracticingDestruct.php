<?php

class File
{
    private string $filename;
    private string $format;

    //add info when new object was added
    public function __construct($filename, $format)
    {
        $this->filename = $filename;
        $this->format = $format;
    }

    //delete info about object after completing the script
    public function __destruct()
    {
        if ($this->format = 'AbstractProductA.php') {
            echo "Object was destructed.";
        }
    }

    public function echoFileAndFormat(): string
    {
        return $this->filename . $this->format . PHP_EOL;
    }
}

$object = new File('destruct', 'AbstractProductA.php');
echo $object->echoFileAndFormat();
