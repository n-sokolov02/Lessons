<?php

require '../practicingNamespaces.php';
use practicingNamespaces\OOP\Product;

class Job extends Product
{
    private string $job;

    public function __construct($job)
    {
        parent::__construct('Alex Doe');
        $this->job = $job;
    }

    public function outputPersonJob()
    {
        echo $this->formatEcho();
        echo 'His job: ' . $this->job;
    }
}

$practice = new Job('PHP developer');
$practice->outputPersonJob();
