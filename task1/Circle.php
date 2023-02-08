<?php

namespace task1;

class Circle
{
    private float $dx;
    private float $dy;
    private float $radius;

    public function __construct($dx, $dy, $radius)
    {
        $this->dx = $dx;
        $this->dy = $dy;
        $this->radius = $radius;
    }

    public function __toString(): string
    {
        return "Коло з центром в ($this->dx, $this->dy) і радіусом $this->radius";
    }

    public function GETdx(): float
    {
        return $this->dx;
    }

    public function SETdx($value): void
    {
        if (is_float($value))
            $this->dx = $value;
    }

    public function GETdy(): float
    {
        return $this->dy;
    }

    public function SETdy($value): void
    {
        if (is_float($value))
            $this->dy = $value;
    }

    public function GETradius(): float
    {
        return $this->radius;
    }

    public function SETradius($value): void
    {
        if (is_float($value) && $value > 0)
            $this->radius = $value;
    }

    public function CheckCrossing(Circle $circle): bool
    {
        $distanceX = abs($this->dx - $circle->dx);
        $distanceY = abs($this->dy - $circle->dy);
        $sumRadius = $this->radius + $circle->radius;
        $subtractRadius = abs($this->radius - $circle->radius);

        if ($subtractRadius < $distanceX && $subtractRadius < $distanceY &&
            $sumRadius > $distanceX && $sumRadius > $distanceY)
            return true;
        return false;
    }
}