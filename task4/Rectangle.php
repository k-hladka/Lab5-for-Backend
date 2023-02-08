<?php

namespace task4;

class Rectangle
{
    private float $cordLeftTopX;
    private float $cordLeftTopY;
    private int $width;
    private int $height;
    private int $id;
    private static int $idStatic = 0;

    public function __construct($cordLeftTopX = 0, $cordLeftTopY = 0, $width = 0, $height = 0)
    {
        $this->cordLeftTopX = $cordLeftTopX;
        $this->cordLeftTopY = $cordLeftTopY;
        $this->width = $width;
        $this->height = $height;
        $this->incrementId();
    }

    public function __clone(): void
    {
        $this->incrementId();
    }

    private function incrementId(): void
    {
        self::$idStatic++;
        $this->id = self::$idStatic;
    }

    public function __toString(): string
    {
        return "Для " . self::$idStatic . "-го об'єкта: <br>Координати лівого верхнього кута ($this->cordLeftTopX, 
        $this->cordLeftTopY) <br>Ширина $this->width <br>Висота $this->height <br>Id $this->id <br><br>";
    }
}