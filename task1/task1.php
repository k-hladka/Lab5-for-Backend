<?php
include_once "Circle.php";

use \task1\Circle;

$circle = new Circle(2, 2, 4);
echo $circle->__toString() . "<br>";

$circle->SETdx(3);
echo 'Центр кола по x: ' . $circle->GETdx() . "<br>";

$circle->SETdy(3.2);
echo 'Центр кола по y: ' . $circle->GETdy() . '<br>';

$circle->SETradius(5);
echo 'Радіус: ' . $circle->GETradius() . '<br>';

echo $circle->__toString() . '<br>';

$circle2 = new Circle(11, 5, 3);
$crossing = $circle->CheckCrossing($circle2);
echo ($crossing) ? "Кола перетинаються" : "Кола не перетинаються";
