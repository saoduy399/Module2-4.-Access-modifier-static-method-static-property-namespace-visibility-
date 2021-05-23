<?php
namespace Employees;

class Employees{

    private $name;
    private $age;
    private $year;

    public function __construct($name, $age, $year)
    {
        $this->name=$name;
        $this->age=$age;
        $this->year=$year;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

}