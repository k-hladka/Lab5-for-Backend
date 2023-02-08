<?php

namespace task5;

class Student extends Human
{
    protected string $universityName;
    protected int $courseNumber = 0;

    public function bornChild()
    {
        echo "Народилась дитина. 'Реалізація класу Student'<br>";
    }

    public function cleaningRoom(): void
    {
        echo "Студент прибирає в кімніті<br>";
    }

    public function cleaningKitchen(): void
    {
        echo "Студент прибирає на кухні<br>";
    }

    public function GETuniversityName(): string
    {
        return $this->universityName;
    }

    public function SETuniversityName($value): void
    {
        if (mb_strlen($value) >= 3)
            $this->universityName = $value;
    }

    public function GETcourseNumber(): int
    {
        return $this->courseNumber;
    }

    public function SETcourseNumber($value): void
    {
        if ($value > 0 && $value < 7)
            $this->courseNumber = $value;
    }

    public function SetNewNumberForCourse(): void
    {
        if ($this->courseNumber + 1 < 7)
            $this->courseNumber++;
    }

    public function __construct($height, $weight, $age, $universityName, $courseNumber)
    {
        parent::__construct($height, $weight, $age);
        $this->universityName = $universityName;
        $this->courseNumber = $courseNumber;
    }

    public function __toString(): string
    {
        return parent::__toString() . "Університет: $this->universityName <br>Курс: $this->courseNumber<br><br>";

    }
}