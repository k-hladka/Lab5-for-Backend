<?php

namespace task5;

abstract class Human implements iCleaningHome
{
    protected int $height;
    protected int $weight;
    protected int $age;

    protected abstract function bornChild();

    public function GETheight(): int
    {
        return $this->height;
    }

    public function SETheight($value): void
    {
        if ($value > 50 && $value < 270)
            $this->height = $value;
    }

    public function GETweight(): int
    {
        return $this->weight;
    }

    public function SETweight($value): void
    {
        if ($value > 0 && $value < 270)
            $this->weight = $value;
    }

    public function GETage(): int
    {
        return $this->age;
    }

    public function SETage($value)
    {
        if ($value > 0 && $value < 150)
            $this->age = $value;
    }

    public function __construct($height, $weight, $age)
    {
        $this->height = $height;
        $this->weight = $weight;
        $this->age = $age;
    }

    public function __toString(): string
    {
        return "<br>Зріст: $this->height <br>Вага: $this->weight <br>Вік: $this->age <br>";
    }
}