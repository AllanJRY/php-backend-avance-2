<?php

include_once ('AgeTrait.php');

class Vegetation
{
    use AgeTrait;
    private string $color;

    /**
     * @param string $color
     */
    public function __construct(string $color, DateTime $dateOfBirth)
    {
        $this->color = $color;
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
}
