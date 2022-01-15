<?php

class User
{
    protected string $name;
    protected int $age;

    public function __construct ($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName ($name) {
        $this->name = $name;
    }

    public function getName (): string {
        return $this->name;
    }

    public function setAge ($age) {
        $this->age = $age;
    }

    public function getAge (): int {
        return $this->age;
    }
}

class Student extends User
{
    private int $studentSalary;
    private int $course;

    public function setStudentSalary ($studentSalary) {
        $this->studentSalary = $studentSalary;
    }

    public function getStudentSalary () {
        return $this->studentSalary;
    }

    public function setCourse ($course) {
        $this->course = $course;
    }

    public function getCourse () {
        return $this->course;
    }
}

class Worker extends User
{
    private int $salary;

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function getSalary(): int {
        return $this->salary;
    }
}

$worker_1 = new Worker('Иван', 25 );
$worker_1->setSalary(1000);

$worker_2 = new Worker ('Вася', 26);
$worker_2->setSalary(2000);

echo $worker_1->getSalary() + $worker_2->getSalary() . PHP_EOL;


$student_1 = new Student('Даниил', 20);
$student_1->setStudentSalary(5000);

$student_2 = new Student('Василий', 22);
$student_2->setStudentSalary(3000);

echo $student_1->getStudentSalary() + $student_2->getStudentSalary();
