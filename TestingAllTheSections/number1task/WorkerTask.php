<?php

class WorkerTask
{
    private string $name;
    private int $age;
    private int $salary;

    public function __construct ($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
        if ($age < 1 OR $age > 100) {
            $this->checkAge();
        }
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function getSalary(): int {
        return $this->salary;
    }

    private function checkAge () {
            echo "try another, wrong input" . PHP_EOL;
            $age = readline();
            $this->setAge($age);
    }
}

$worker_1 = new WorkerTask('Иван', 30);
$worker_1->setSalary(1000);

$worker_2 = new WorkerTask('Вася', 26);
$worker_2->setSalary(2000);

$worker_3 = new WorkerTask('Дима', 25);
$worker_3->setSalary(1000);

echo "task:" . $worker_3->getAge() * $worker_3->getSalary();
