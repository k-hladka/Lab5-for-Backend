<?php

namespace task5;

class Programmer extends Human
{
    protected array $languages;
    protected int $experience;

    public function bornChild(): void
    {
        echo "Народилась дитина. 'Реалізація класу Programmer'<br>";
    }

    public function cleaningRoom(): void
    {
        echo "Програміст прибирає в кімніті<br>";
    }

    public function cleaningKitchen(): void
    {
        echo "Програміст прибирає на кухні<br>";
    }

    public function GETlanguages(): string
    {
        return $this->convertArrayToString($this->languages);
    }

    public function SETlanguages($value): void
    {
        $this->addValueInArray($value);
    }

    public function GETexperience(): int
    {
        return $this->experience;
    }

    public function SETexperience($value): void
    {
        if ($value > 0)
            $this->experience = $value;
    }

    public function AddLanguage($language): void
    {
        $this->addValueInArray($language);
    }

    public function __construct($height, $weight, $age, $languages, $experience)
    {
        parent::__construct($height, $weight, $age);
        $this->addValueInArray($languages);
        $this->experience = $experience;
    }

    public function __toString(): string
    {
        return parent::__toString() . "Мови програмування: " . $this->convertArrayToString($this->languages) . "<br>Досвід: $this->experience<br><br>";
    }

    private function addValueInArray($value): void
    {
        $index = (empty($this->languages)) ? 0 : count($this->languages);
        if (is_array($value))
            foreach ($value as $i)
                $this->languages[$index++] = $i;

        else if (is_string($value)) {
            $arr = explode(",", $value);
            foreach ($arr as $i)
                $this->languages[$index++] = $i;
        }
    }

    private function convertArrayToString($array): string
    {
        return implode(", ", $array);
    }
}