<?php
include_once "Rectangle.php";

use \task4\Rectangle;

$rect1 = new Rectangle(10, 10, 200, 300);
echo $rect1->__toString();

$rect2 = new Rectangle(11, 3, 2, 10);
echo $rect2->__toString();

$rect3 = clone $rect1;
echo $rect3->__toString();

$rect4 = clone $rect2;
echo $rect4->__toString();