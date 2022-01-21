<?php

include_once ('AgeTrait.php');

class Animal
{
    use AgeTrait;

    private string $race;

    /**
     * @param string $race
     */
    public function __construct(string $race, DateTime $dateOfBirth)
    {
        $this->race = $race;
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return string
     */
    public function getRace(): string
    {
        return $this->race;
    }

    /**
     * @param string $race
     */
    public function setRace(string $race): void
    {
        $this->race = $race;
    }
}
