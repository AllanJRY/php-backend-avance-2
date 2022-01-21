<?php

include_once ('AgeTrait.php');

class User
{
    use AgeTrait;

    private string $name;

    /**
     * @param string $name
     */
    public function __construct(string $name, DateTime $dateOfBirth)
    {
        $this->name = $name;
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
