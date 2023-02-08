<?php
spl_autoload_register(function ($className) {
    include_once("../" . $className . ".php");
});

use \task5\Human;
use \task5\Student;
use \task5\Programmer;

/*
 * Реалізація об'єкту, доки Human не був абстрактним
 *
 * $human = new Human(170, 60, 24);
echo "Для human: " . $human->__toString();
$human->SETheight(169);
$human->SETweight(64);
$human->SETage(25);

echo "<br>Після виконяння SET-методів: <br>Зріст: " . $human->GETheight() . "<br>Вага: " .
    $human->GETweight() . "<br>Вік: " . $human->GETage() . "<br>";
*/

$student = new Student(180, 57, 22, "Житомирська політехніка", 2);
echo "<br>Для student: " . $student->__toString();
$student->SETheight(170);
$student->SETweight(60);
$student->SETage(24);
$student->SetNewNumberForCourse();
$student->SetNewNumberForCourse();
echo "<br>Після виконяння SET-методів: <br>Зріст: " . $student->GETheight() . "<br>Вага: " .
    $student->GETweight() . "<br>Вік: " . $student->GETage() . "<br>Університет: " . $student->GETuniversityName()
    . "<br>Курс: " . $student->GETcourseNumber() . "<br><br>";


$programmer = new Programmer(164, 58, 23, "C, C#, JavaScript", 2);
echo "<br>Для programmer: " . $programmer->__toString();
$programmer->SETheight(150);
$programmer->SETweight(60);
$programmer->SETage(22);
$programmer->SETexperience(3);
$programmer->SETlanguages("Java");
$programmer->AddLanguage("Php");
echo "<br>Після виконяння SET-методів: <br>Зріст: " . $programmer->GETheight() . "<br>Вага: " .
    $programmer->GETweight() . "<br>Вік: " . $programmer->GETage() . "<br>Мови програмування: " . $programmer->GETlanguages()
    . "<br>Курс: " . $student->GETcourseNumber() . "<br><br>";

$student->bornChild();
$programmer->bornChild();

$student->cleaningRoom();
$student->cleaningKitchen();

$programmer->cleaningRoom();
$programmer->cleaningKitchen();