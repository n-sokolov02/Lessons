<?php

class testProtected
{
    protected string $model;

    public function __construct($model) {
        $this->model = $model;
    }

    protected function format(): string {
        return ucwords($this->model);
    }

    public function getModel(): string {
        return $this->format($this->model);
    }
}

class ParentProtected extends testProtected
{
    public function format(): string {
        return strtoupper($this->model);
    }
}

//if we initialize an object of the parent class -> function format in parent class will be required
//if we initialize an object of the child class -> function format in child class will be required

$test = new ParentProtected('protected type');
echo $test->getModel();
