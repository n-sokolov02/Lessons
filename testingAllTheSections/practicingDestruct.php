<?php

class File
{
    private string $filename;
    private string $format;

    public function __construct($filename, $format) {
        $this->filename = $filename;
        $this->format = $format;
    }

    public function __destruct() {
        if ($this->format = '.php') {
            echo "Object was destructed.";
        }
    }

    public function echoFileAndFormat(): string {
        return $this->filename . $this->format . PHP_EOL;
    }
}

$object = new File('destruct', '.php');
echo $object->echoFileAndFormat();
