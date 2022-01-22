<?php

require '../practicingNamespaces.php';
use PracticingNameSpaces\Practice\PracticingNamespaces;

$practice = new PracticingNamespaces('Alex Doe');
echo $practice->getName();
